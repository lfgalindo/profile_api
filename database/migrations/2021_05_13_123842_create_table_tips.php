<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTips extends Migration
{
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->uuid('question_id');
            $table->integer('order');
            $table->string('tip', 255);
            $table->string('source', 255);
            $table->timestamps();

            $table->primary(['question_id', 'order']);
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    public function down()
    {
        Schema::table('tips', function (Blueprint $table) {
            $table->dropForeign(['question_id']);
        });

        Schema::dropIfExists('tips');
    }
}
