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
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key with big integer auto-increment
            $table->string('name'); // Admin's name
            $table->string('email')->unique(); // Email, should be unique
            $table->string('password'); // Password for authentication
            $table->string('role')->default('admin'); // Role, default to 'admin'
            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
