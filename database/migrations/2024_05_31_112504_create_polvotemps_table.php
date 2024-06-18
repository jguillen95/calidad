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
        Schema::create('polvotemps', function (Blueprint $table) {
            $table->id();
            $table->string('sap_id_etiqueta');
            $table->string('desc_si_etiqueta');
            $table->string('desc_si_capsula');
            $table->string('desc_si_desecante');
            $table->string('desc_si_mezcla');
            $table->string('desc_lotificado_si');
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
        Schema::dropIfExists('polvotemps');
    }
};
