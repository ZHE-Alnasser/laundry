<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderService extends Migration
{

    public function up()
    {
        Schema::create('order_service', function (Blueprint $table) {
            $table->foreignId('service_id');
            $table->foreignId('order_id');
            $table->foreignId('item_id');
            $table->float('amount')->default(0);
            $table->integer('quantity')->default(0);
            $table->string('note',700)->nullable();
            $table->primary(['service_id','order_id','item_id']);
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('order_service');
    }
}
