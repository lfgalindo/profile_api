<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestionsTypes extends Migration
{
    public function up()
    {
        Schema::create('questions_types', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('type', 255);
            $table->timestamps();

            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions_types');
    }
}
