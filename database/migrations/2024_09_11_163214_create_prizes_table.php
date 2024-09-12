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
        Schema::create('prizes', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->string('name'); // Name field
            $table->text('description')->nullable(); // Description field (nullable)
            $table->string('value'); // Value field with decimal type
            $table->unsignedBigInteger('promo_id'); // Foreign key column

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
        Schema::dropIfExists('prizes');
    }
};
