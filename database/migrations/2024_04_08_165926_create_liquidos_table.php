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
        Schema::create('liquidos', function (Blueprint $table) {
            $table->id();
            $table->string('sap_id_etiqueta');
            $table->string('img_si_etiqueta');
            $table->string('img_no_etiqueta');
            $table->string('desc_si_etiqueta');
            $table->string('desc_no_etiqueta');
            $table->string('img_si_etiqueta_1');
            $table->string('img_no_etiqueta_1');
            $table->string('desc_si_etiqueta_1');
            $table->string('desc_no_etiqueta_1');
            $table->string('sap_id_gotero');
            $table->string('img_si_gotero');
            $table->string('img_no_gotero');
            $table->string('desc_si_gotero');
            $table->string('desc_no_gotero');
            $table->string('img_si_dedal');
            $table->string('img_no_dedal');
            $table->string('desc_si_dedal');
            $table->string('desc_no_dedal');
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
        Schema::dropIfExists('liquidos');
    }
};
