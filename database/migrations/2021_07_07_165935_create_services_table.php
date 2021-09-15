<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{

    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('item_id');
            $table->double('price')->default(0)->nullable();
            $table->longText('description')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('services');
    }
}
