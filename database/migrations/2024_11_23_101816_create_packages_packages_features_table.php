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
       Schema::create('packages_packages_features', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->foreignId('package_id')->constrained('packages')->cascadeOnDelete(); // Foreign Key to packages
            $table->foreignId('feature_id')->constrained('package_features')->cascadeOnDelete(); // Foreign Key to package_features
            $table->timestamps();        // Created at and Updated at
            $table->softDeletes();       // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages_packages_features');
    }
};
