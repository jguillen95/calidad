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
        Schema::create('desinfeccions_old', function (Blueprint $table) {
            $table->id();
            $table->string('actividad');
            $table->string('sustancia');
            $table->string('concentracion');
            $table->string('realizo');
            $table->string('cumple');
            $table->string('verifico');
            $table->bigInteger('sanitizacion_id')->unsigned();
            $table->foreign('sanitizacion_id')->references('id')->on('sanitizacions');
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
        Schema::dropIfExists('desinfeccions');
    }
};
