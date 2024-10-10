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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('total');
            $table->string('montant_total');
            $table->string('remise');
            $table->unsignedBigInteger('client_ID');
            $table->foreign('client_ID')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('caisse_ID');
            $table->foreign('caisse_ID')->references('id')->on('caisses')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('vendeur_ID');
            $table->foreign('vendeur_ID')->references('id')->on('vendeurse')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
};