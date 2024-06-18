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
        Schema::create('codificados', function (Blueprint $table) {
            $table->id();
            $table->string('img_si_codi');
            $table->string('img_no_codi');
            $table->string('desc_si_codi');
            $table->string('desc_no_codi');
            $table->string('img_si_display');
            $table->string('img_no_display');
            $table->string('desc_si_display');
            $table->string('desc_no_display');
            $table->string('lote_envase');
            $table->string('cad_envase');
            $table->string('lote_display');
            $table->string('cad_display');
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
        Schema::dropIfExists('codificados');
    }
};
