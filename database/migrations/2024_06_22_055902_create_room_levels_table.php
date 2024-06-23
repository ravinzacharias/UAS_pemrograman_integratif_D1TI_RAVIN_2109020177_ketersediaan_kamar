<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('room_levels', function (Blueprint $table) {
            $table->id();
            $table->string('level_name')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room_levels');
    }
}
