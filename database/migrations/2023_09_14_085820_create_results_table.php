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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('lesson_id');
            $table->integer('chapter_id');

            $table->integer('correct_ans')->nullable();
            $table->integer('wrong_ans')->nullable();
            $table->integer('skip_ans')->nullable();
            // $table->integer('skip_ans')->default(-1);  // -1 = not attend on quiz, 1 = passed on quiz, 0 = fail on quiz

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
