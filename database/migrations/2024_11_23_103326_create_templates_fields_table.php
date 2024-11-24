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
         Schema::create('templates_fields', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('name');      // Name (varchar)
            $table->foreignId('template_id')->constrained('templates')->cascadeOnDelete(); // Foreign Key to templates
            $table->string('field_type'); // Field Type (varchar)
            $table->string('label');     // Label (varchar)
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates_fields');
    }
};
