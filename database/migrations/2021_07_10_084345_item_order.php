<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemOrder extends Migration
{

    public function up()
    {
        Schema::create('item_order', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('order_id');
            $table->foreignId('service_id');
            $table->float('amount')->default(0);
            $table->integer('quantity')->default(0);
            $table->primary(['item_id','order_id']);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('item_order');
    }
}
