<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeFramesTable extends Migration
{

    public function up()
    {
        Schema::create('time_frames', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('time_frames');
    }
}
