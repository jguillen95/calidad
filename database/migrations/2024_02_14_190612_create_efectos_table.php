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
        Schema::create('efectos', function (Blueprint $table) {
            $table->id();
            $table->string('inhalacion_p');
            $table->string('ojos_p');
            $table->string('piel_p');
            $table->string('incendio_p');
            $table->string('ingestion_p');
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
        Schema::dropIfExists('efectos');
    }
};
