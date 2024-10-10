<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendeuse', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('code')-> unique();
            $table->integer('point_vente_ID')->default(0); 
            $table->foreign('point_vente_ID')->references('id')->on('points_ventes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('cle');
            $table->string('login');
            $table->string('password');
            $table->timestamps();
        });
        DB::statement("CREATE TRIGGER generate_code BEFORE INSERT ON vendeuses FOR EACH ROW SET NEW.code = (SELECT CONCAT('VEN-', LPAD(FLOOR(RAND() * 99999999) + 1, 8, '0'))) AS code");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendeuse');
        DB::statement("DROP TRIGGER IF EXISTS generate_code");
    }
};