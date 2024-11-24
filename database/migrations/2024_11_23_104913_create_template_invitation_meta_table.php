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
         Schema::create('template_invitation_meta', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('invitation_id')->constrained('invitations')->cascadeOnDelete(); // Foreign Key to invitations
            $table->string('key');       // Key (varchar)
            $table->string('value');     // Value (varchar)
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_invitation_meta');
    }
};
