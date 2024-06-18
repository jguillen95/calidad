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
        Schema::create('contenidos', function (Blueprint $table) {
            $table->id();
            $table->string('cajas_cama');
            $table->string('camas_palet');
            $table->string('unidad_caja');
            $table->string('unidad-palet');
            $table->bigInteger('pterminado_id')->unsigned();
            $table->foreign('pterminado_id')->references('id')->on('pterminados');
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
        Schema::dropIfExists('contenidos');
    }
};
