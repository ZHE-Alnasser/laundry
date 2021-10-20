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
            $table->foreignId('employee_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('branch_id')->nullable();
            $table->float('vat')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('total')->nullable();
            $table->string('discount')->nullable();
            $table->set('payment',['cash','card','transfer'])->nullable();
            $table->boolean('is_done')->default(false);
            $table->boolean('is_delivery')->default(false);
            $table->boolean('is_pickup')->default(false);
            $table->integer('process')->default(0);
            $table->integer('delivery_time_frame_id')->nullable();
            $table->integer('pickup_time_frame_id')->nullable();
            $table->integer('pickup_agent_id')->nullable();
            $table->integer('delivery_agent_id')->nullable();
            $table->timestamp('requested_pickup_date')->nullable();
            $table->timestamp('requested_delivery_date')->nullable();
            $table->timestamp('agent_picked_up_date')->nullable();
            $table->timestamp('agent_delivered_date')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
