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
//            $table->foreignId('item_id');
            $table->float('price')->default(0);
            $table->integer('qty')->default(0);

            $table->primary(['service_id','order_id']);
//            $table->id();
//            $table->foreignIdFor(\App\Models\Order::class);
//            $table->foreignIdFor(\App\Models\Service::class);
//            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('order_service');
    }
}
