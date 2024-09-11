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
        Schema::create('entries', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->unsignedBigInteger('user_id'); // Foreign key for users
            $table->unsignedBigInteger('promo_id'); // Foreign key for promos
            $table->date('submission_date'); // Date of submission
            $table->string('status'); // Status of the entry

            // Add foreign key constraints
            $table->foreign('user_id')
                ->references('id')
                ->on('users') // Table name in which `id` is the primary key
                ->onDelete('cascade'); // Action when the related user is deleted

            $table->foreign('promo_id')
                ->references('id')
                ->on('promos') // Table name in which `id` is the primary key
                ->onDelete('cascade'); // Action when the related promo is deleted

            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
