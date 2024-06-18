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
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->string('apariencia');
            $table->string('olor');
            $table->string('ph');
            $table->string('punto_fusion');
            $table->string('temperatura');
            $table->string('velocidad');
            $table->string('inflamabilidad_info');
            $table->string('limite');
            $table->string('presion_vapor');
            $table->string('densidad_vapor');
            $table->string('densidad_relativa');
            $table->string('solubilidad');
            $table->string('coeficiente');
            $table->string('temperatura_esp');
            $table->string('temperatura_descom');
            $table->string('viscosidad');
            $table->string('peso_mol');
            $table->string('materia_volatil');
            $table->string('datos_relevantes');
            $table->bigInteger('seguridad_id')->unsigned();
            $table->foreign('seguridad_id')->references('id')->on('seguridads');
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
        Schema::dropIfExists('propiedads');
    }
};
