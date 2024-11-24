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
         Schema::create('invitations_contacts', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('invitation_id')->constrained('invitations')->cascadeOnDelete(); // Foreign Key to invitations
            $table->foreignId('contact_id')->constrained('contacts')->cascadeOnDelete(); // Foreign Key to contacts
            $table->string('qrcode')->nullable(); // QR Code (varchar)
            $table->dateTime('invitation_received')->nullable(); // Invitation Received (datetime)
            $table->dateTime('invitation_failed')->nullable(); // Invitation Failed (datetime)
            $table->dateTime('invitation_accepted')->nullable(); // Invitation Accepted (datetime)
            $table->dateTime('invitation_rejected')->nullable(); // Invitation Rejected (datetime)
            $table->dateTime('is_present_on_event')->nullable(); // Is Present On Event (datetime)
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations_contacts');
    }
};
