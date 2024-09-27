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
            $table->bigIncrements('id'); // Primary key, auto-incrementing
            $table->unsignedBigInteger('prize_id');
            $table->unsignedBigInteger('entry_id');
            $table->date('pick_date');
            $table->boolean('is_winner')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('prize_id')
                ->references('id')
                ->on('prizes')
                ->onDelete('cascade');

            $table->foreign('entry_id')
                ->references('id')
                ->on('entries');
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
