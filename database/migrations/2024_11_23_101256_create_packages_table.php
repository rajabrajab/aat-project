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
       Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('category_id')->constrained('package_categories')->cascadeOnDelete(); // Foreign Key to package_categories
            $table->string('name');      // Name (varchar)
            $table->double('price');     // Price (double)
            $table->integer('invitees_count'); // Invitees Count (int)
            $table->boolean('accept_coupon');  // Accept Coupon (tinyint)
            $table->enum('status', ['active', 'unactive'])->default('active'); // Status (enum)
            $table->string('description')->nullable(); // Description (varchar)
            $table->boolean('recommended')->default(false); // Recommended (tinyint)
            $table->timestamps();       // Created at and Updated at
            $table->softDeletes();      // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
