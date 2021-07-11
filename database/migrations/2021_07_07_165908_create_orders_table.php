<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->from(random_int(1000,5465));
            $table->foreignId('customer_id')->nullable();
            $table->foreignId('employee_id');
            $table->float('vat');
            $table->float('without_vat');
            $table->float('total');
            $table->string('discount')->nullable();
            $table->set('payment',['cash','card','transfer'])->nullable();
            $table->boolean('status');
            $table->integer('time_frame_id')->nullable();
            $table->integer('pickup_agent_id')->nullable();
            $table->integer('delivery_agent_id')->nullable();
            $table->timestamp('requested_pickup_date')->nullable();
            $table->timestamp('requested_delivery_date')->nullable();
            $table->timestamp('agent_pickup_date')->nullable();
            $table->timestamp('agent_delivery_date')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
