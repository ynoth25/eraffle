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
        Schema::create('raffle_picks', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->unsignedBigInteger('promo_id'); // Foreign key for promos
            $table->unsignedBigInteger('entry_id'); // Foreign key for entries
            $table->date('pick_date'); // Date when the pick was made
            $table->boolean('is_winner'); // Boolean indicating if the pick is a winner

            // Add foreign key constraints
            $table->foreign('promo_id')
                ->references('id')
                ->on('promos') // Table name in which `id` is the primary key
                ->onDelete('cascade'); // Action when the related promo is deleted

            $table->foreign('entry_id')
                ->references('id')
                ->on('entries') // Table name in which `id` is the primary key
                ->onDelete('cascade'); // Action when the related entry is deleted

            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raffle_picks');
    }
};
