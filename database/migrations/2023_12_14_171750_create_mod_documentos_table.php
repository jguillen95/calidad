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
        Schema::create('mod_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('titulo');
            $table->string('responsable');
            $table->dateTime('fecha');
            $table->string('firma_mod');
            $table->bigInteger('desviacionDoc_id')->unsigned();
            $table->foreign('desviacionDoc_id')->references('id')->on('desviaciones');
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
        Schema::dropIfExists('mod_documentos');
    }
};
