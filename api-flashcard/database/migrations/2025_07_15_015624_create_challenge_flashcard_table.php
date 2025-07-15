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
        Schema::create('challenge_flashcard', function (Blueprint $table) {
            $table->unsignedBigInteger('challenge_id');
            $table->foreign('challenge_id')->references('id')->on('challenge');
            $table->unsignedBigInteger('flashcard_id');
            $table->foreign('flashcard_id')->references('id')->on('flashcard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenge_flashcard');
    }
};
