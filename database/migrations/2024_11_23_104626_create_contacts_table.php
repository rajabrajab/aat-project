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
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('last_name');       // Last Name (varchar)
            $table->string('first_name');      // First Name (varchar)
            $table->string('position')->nullable(); // Position (varchar)
            $table->date('birthdate')->nullable(); // Birthdate (date)
            $table->enum('gender', ['male', 'female']); // Gender (enum)
            $table->string('phone_number')->nullable(); // Phone Number (varchar)
            $table->string('whatsapp_number')->nullable(); // WhatsApp Number (varchar)
            $table->string('email')->nullable(); // Email (varchar)
            $table->string('created_from')->nullable(); // Created From (varchar)
            $table->timestamps();            // Created at and Updated at
            $table->softDeletes();           // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
