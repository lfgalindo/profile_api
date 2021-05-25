<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTips extends Migration
{
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id');
            $table->integer('order');
            $table->string('tip', 255);
            $table->string('source', 255);
            $table->timestamps();

            $table->primary(['profile_id', 'order']);
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    public function down()
    {
        Schema::table('tips', function (Blueprint $table) {
            $table->dropForeign(['profile_id']);
        });

        Schema::dropIfExists('tips');
    }
}
