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
        Schema::create('derrames', function (Blueprint $table) {
            $table->id();
            $table->string('derrame_material');
            $table->string('equipo_proteccion');
            $table->string('precauciones_ambiente');
            $table->string('material_limpieza');
            $table->string('desechos');
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
        Schema::dropIfExists('derrames');
    }
};
