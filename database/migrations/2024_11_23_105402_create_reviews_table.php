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
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Foreign Key to users
            $table->foreignId('invitation_id')->constrained('invitations')->cascadeOnDelete(); // Foreign Key to invitations
            $table->string('review');    // Review (varchar)
            $table->tinyInteger('rating'); // Rating (tinyint)
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
