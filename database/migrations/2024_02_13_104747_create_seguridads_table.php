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
        Schema::create('seguridads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_p');
            $table->string('marca_p');
            $table->string('id_sap');
            $table->string('codigo_p');
            $table->string('proposito_p');
            $table->string('usos_p');
            $table->string('nombre_distribuidor');
            $table->string('direccion_p');
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
        Schema::dropIfExists('seguridads');
    }
};
