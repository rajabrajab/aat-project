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
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('key');      // Key (varchar)
            $table->string('value');    // Value (varchar)
            $table->string('autoload'); // Autoload (varchar)
            $table->timestamps();       // Created at and Updated at
            $table->softDeletes();      // Soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
