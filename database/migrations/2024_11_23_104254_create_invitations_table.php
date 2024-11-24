<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('invitations', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Foreign Key to users
            $table->foreignId('category_id')->constrained('invitation_categories')->cascadeOnDelete(); // Foreign Key to invitation_categories
            $table->foreignId('package_id')->constrained('packages')->cascadeOnDelete(); // Foreign Key to packages
            $table->foreignId('template_id')->constrained('templates')->cascadeOnDelete(); // Foreign Key to templates
            $table->string('invitation_name'); // Invitation Name (varchar)
            $table->enum('date_type', ['hijri', 'gregorian']); // Date Type (enum)
            $table->date('invitation_date'); // Invitation Date (date)
            $table->time('invitation_time'); // Invitation Time (time)
            $table->string('invitation_image')->nullable(); // Invitation Image (varchar)
            $table->string('invitation_video')->nullable(); // Invitation Video (varchar)
            $table->string('invitation_file')->nullable(); // Invitation File (varchar)
            $table->double('map_latitude')->nullable(); // Map Latitude (double)
            $table->double('map_longitude')->nullable(); // Map Longitude (double)
            $table->string('city'); // City (varchar)
            $table->string('hood')->nullable(); // Hood (varchar)
            $table->longText('detailed_address')->nullable(); // Detailed Address (longtext)
            $table->longText('message_instructions_to_invitees')->nullable(); // Instructions to Invitees (longtext)
            $table->enum('payment_method', ['cash', 'paybal', 'tamara', 'myfatoorah']); // Payment Method (enum)
            $table->enum('payment_status', ['paid', 'not_paid']); // Payment Status (enum)
            $table->longText('payment_response')->nullable(); // Payment Response (longtext)
            $table->bigInteger('payment_transaction_id')->nullable(); // Payment Transaction ID (bigint)
            $table->double('payment_amount')->nullable(); // Payment Amount (double)
            $table->integer('invitees_count')->default(0); // Invitees Count (int)
            $table->integer('present_count')->default(0); // Present Count (int)
            $table->integer('absent_count')->default(0); // Absent Count (int)
            $table->bigInteger('deleted_by')->nullable(); // Deleted By (bigint)
            $table->string('package_json')->nullable(); // Package JSON (varchar)
            $table->enum('created_from', ['system', 'user']); // Created From (enum)
            $table->enum('invitation_status', ['draft', 'published', 'archived']); // Invitation Status (enum)
            $table->string('qr_code')->nullable(); // QR Code (varchar)
            $table->timestamps(); // Created at and Updated at
            $table->softDeletes(); // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
