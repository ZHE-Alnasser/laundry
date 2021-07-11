<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->double('price')->default(0)->nullable();
            $table->string('is_active')->default(false);
            $table->string('is_featured')->default(false);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('items');
    }
}
