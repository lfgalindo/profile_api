<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestions extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('type_id');
            $table->string('question', 255);
            $table->string('answer', 255);
            $table->timestamps();

            $table->primary('id');
            $table->foreign('type_id')->references('id')->on('questions_types');
        });
    }

    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
           $table->dropForeign(['type_id']);
        });

        Schema::dropIfExists('questions');
    }
}
