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
        Schema::create('promos', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Name field
            $table->text('description')->nullable(); // Description field
            $table->date('start_date'); // Start date field
            $table->date('end_date'); // End date field
            $table->text('terms_and_conditions')->nullable(); // Terms and conditions field
            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
