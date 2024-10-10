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
        Schema::create('_ligne_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_ID');
            $table->foreign('order_ID')->references('id')->on('order')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('product_ID');
            $table->foreign('product_ID')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity')->unsigned()->default(1);
            $table->string('total');
            $table->string('remise');
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
        Schema::dropIfExists('_ligne_commandes');
    }
};