<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGamesQuestions extends Migration
{
    public function up()
    {
        Schema::create('games_questions', function (Blueprint $table) {
            $table->uuid('game_id');
            $table->uuid('question_id');
            $table->timestamps();

            $table->primary(['game_id', 'question_id']);
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    public function down()
    {
        Schema::table('games_questions', function (Blueprint $table) {
            $table->dropForeign(['game_id']);
            $table->dropForeign(['question_id']);
        });

        Schema::dropIfExists('games_questions');
    }
}
