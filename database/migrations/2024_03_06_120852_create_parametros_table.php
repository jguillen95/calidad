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
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cofia');
            $table->string('cubre');
            $table->string('uniforme');
            $table->string('manos');
            $table->string('unas');
            $table->string('heridas');
            $table->string('maquillaje');
            $table->string('botas');
            $table->string('perfume');
            $table->string('enfermedad');
            $table->string('articulos');
            $table->string('observaciones');
            $table->bigInteger('bpm_id')->unsigned();
            $table->foreign('bpm_id')->references('id')->on('bpms');
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
        Schema::dropIfExists('parametros');
    }
};
