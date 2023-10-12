<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribedetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscribeId');
            $table->foreign('subscribeId')->references('id')->on('subscribes');
            $table->unsignedBigInteger('productId');
            $table->foreign('productId')->references('id')->on('products');
            $table->float('total');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribedetails');
    }
};
