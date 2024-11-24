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
         Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('name');      // Name (varchar)
            $table->foreignId('category_id')->constrained('package_categories')->cascadeOnDelete(); // Foreign Key to package_categories
            $table->string('status');    // Status (varchar)
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete(); // Foreign Key to users (nullable)
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
