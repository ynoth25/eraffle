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
            $table->bigIncrements('id'); // Use bigIncrements for a big integer primary key
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('status')->default('pending');
            $table->string('serial_number');
            $table->unsignedBigInteger('promo_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('promo_id')
                ->references('id')
                ->on('promos');
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
