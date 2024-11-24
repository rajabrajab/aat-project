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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Foreign Key to users
            $table->foreignId('invitation_id')->constrained('invitations')->cascadeOnDelete(); // Foreign Key to invitations
            $table->enum('method', ['cash', 'paybal', 'tamara', 'myfatoorah']); // Payment Method (enum)
            $table->longText('provider_response')->nullable(); // Provider Response (longtext)
            $table->bigInteger('transaction_id')->nullable(); // Transaction ID (bigint)
            $table->double('amount')->nullable(); // Payment Amount (double)
            $table->string('currency')->nullable(); // Currency (varchar)
            $table->bigInteger('deleted_by')->nullable(); // Deleted By (bigint)
            $table->string('reason')->nullable(); // Reason (varchar)
            $table->enum('status', ['paid', 'not_paid']); // Payment Status (enum)
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
