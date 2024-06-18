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
        Schema::create('corrugados', function (Blueprint $table) {
            $table->id();
            $table->string('sap_id_corrugado');
            $table->string('img_si_corrugado');
            $table->string('img_no_corrugado');
            $table->string('desc_si_corrugado');
            $table->string('desc_no_corrugado');
            $table->string('img_si_acomodo');
            $table->string('img_no_acomodo');
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
        Schema::dropIfExists('corrugados');
    }
};
