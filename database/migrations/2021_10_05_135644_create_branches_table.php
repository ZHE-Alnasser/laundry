<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{

    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('vat_number');
            $table->string('phone', 50)->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
