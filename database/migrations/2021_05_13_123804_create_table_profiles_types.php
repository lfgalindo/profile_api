<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfilesTypes extends Migration
{
    public function up()
    {
        Schema::create('profiles_types', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('type', 255);
            $table->timestamps();

            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles_types');
    }
}
