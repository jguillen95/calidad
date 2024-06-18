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
        Schema::create('proteccions', function (Blueprint $table) {
            $table->id();
            $table->string('parametros_control');
            $table->string('control_tecnicos');
            $table->string('medidas');
            $table->string('prote_ojos');
            $table->string('prote_piel');
            $table->string('prote_respiratoria');
            $table->string('peligros_termicos');
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
        Schema::dropIfExists('proteccions');
    }
};
