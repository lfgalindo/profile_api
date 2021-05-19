<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGamesProfiles extends Migration
{
    public function up()
    {
        Schema::create('games_profiles', function (Blueprint $table) {
            $table->uuid('game_id');
            $table->uuid('profile_id');
            $table->timestamps();

            $table->primary(['game_id', 'profile_id']);
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    public function down()
    {
        Schema::table('games_profiles', function (Blueprint $table) {
            $table->dropForeign(['game_id']);
            $table->dropForeign(['profile_id']);
        });

        Schema::dropIfExists('games_profiles');
    }
}
