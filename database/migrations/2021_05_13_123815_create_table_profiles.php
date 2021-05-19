<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfiles extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('type_id');
            $table->string('answer', 255);
            $table->timestamps();

            $table->primary('id');
            $table->foreign('type_id')->references('id')->on('profiles_types');
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
           $table->dropForeign(['type_id']);
        });

        Schema::dropIfExists('profiles');
    }
}
