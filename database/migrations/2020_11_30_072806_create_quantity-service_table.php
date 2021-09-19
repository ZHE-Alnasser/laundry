<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantityServiceTable extends Migration
{

    public function up()
    {
        Schema::create('quantity_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_service_id');
//            $table->id('order_service_id');
            $table->integer('value')->nullable();
            $table->timestamps();
//
//            $table->foreign('order_service_id')
//                ->references('id')
//                ->on('order_service')
//                ->onDelete('cascade');
        });
    }


    public function down()
    {
        //
    }
}
