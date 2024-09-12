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
        Schema::create('validations', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->unsignedBigInteger('entry_id'); // Foreign key for entries
            $table->unsignedBigInteger('validated_by'); // Foreign key for admins who validated
            $table->string('validation_code'); // Validation code
            $table->string('validation_status'); // Validation status (e.g., approved, rejected)
            $table->text('comments')->nullable(); // Comments field, nullable
            $table->date('validation_date'); // Date of validation

            // Add foreign key constraints
            $table->foreign('entry_id')
                ->references('id')
                ->on('entries') // Table name in which `id` is the primary key
                ->onDelete('cascade'); // Action when the related entry is deleted

            $table->foreign('validated_by')
                ->references('id')
                ->on('admins') // Table name in which `id` is the primary key
                ->onDelete('cascade'); // Action when the related admin is deleted

            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
