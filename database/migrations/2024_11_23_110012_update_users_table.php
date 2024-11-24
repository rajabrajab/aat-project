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
         Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'full_name'); // Rename 'name' to 'full_name'
            $table->enum('source_platform', ['facebook', 'Instagram', 'x', 'snapchat'])->nullable()->after('id'); // Source Platform
            $table->string('avatar')->nullable()->after('password'); // Avatar (varchar)
            $table->string('status')->nullable()->after('full_name'); // Status (varchar)
            $table->string('role')->nullable()->after('status'); // Role (varchar)
            $table->string('permissions')->nullable()->after('role'); // Permissions (varchar)
            $table->string('activated_at')->nullable()->after('permissions'); // Activated At (varchar)
            $table->string('username')->nullable()->after('activated_at'); // Username (varchar)
            $table->string('country')->nullable()->after('username'); // Country (varchar)
            $table->string('address')->nullable()->after('country'); // Address (varchar)
            $table->string('gender')->nullable()->after('address'); // Gender (varchar)
            $table->string('city')->nullable()->after('gender'); // City (varchar)
            $table->dateTime('last_login')->nullable()->after('city'); // Last Login (datetime)
            $table->bigInteger('deleted_by')->nullable()->after('last_login'); // Deleted By (bigint)
            $table->string('utm')->nullable()->after('deleted_by'); // UTM (varchar)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
