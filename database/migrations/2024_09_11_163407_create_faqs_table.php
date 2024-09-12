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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->unsignedBigInteger('promo_id'); // Foreign key for promos
            $table->text('question'); // Question text
            $table->text('answer'); // Answer text

            // Add foreign key constraint
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
        Schema::dropIfExists('faqs');
    }
};
