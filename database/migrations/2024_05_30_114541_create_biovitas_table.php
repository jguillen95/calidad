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
        Schema::create('biovitas', function (Blueprint $table) {
            $table->id();
            $table->string('desc_si_envase');
            $table->string('desc_si_tapa');
            $table->string('desc_si_liner');
            $table->string('img_si_etiqueta');
            $table->string('img_no_etiqueta');
            $table->string('desc_si_etiqueta');
            $table->string('desc_no_etiqueta');
            $table->string('desc_si_capsula');
            $table->string('desc_si_desecante');
            $table->string('desc_si_mezcla');
            $table->string('densidad_mezcla');
            $table->string('ph_mezcla');
            $table->string('desc_envase_si');
            $table->string('lote_envase');
            $table->string('cad_envase');
            $table->bigInteger('criterio_id')->unsigned();
            $table->foreign('criterio_id')->references('id')->on('criterios');
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
        Schema::dropIfExists('biovitas');
    }
};
