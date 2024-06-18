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
        Schema::create('empaques', function (Blueprint $table) {
            $table->id();
            $table->string('id_sap_envase');
            $table->string('img_si_envase');
            $table->string('img_no_envase');
            $table->string('desc_si_envase');
            $table->string('desc_no_envase');
            $table->string('img_si_tapa');
            $table->string('img_no_tapa');
            $table->string('desc_si_tapa');
            $table->string('desc_no_tapa');
            $table->string('id_sap_sello');
            $table->string('img_si_sello');
            $table->string('img_no_sello');
            $table->string('desc_si_sello');
            $table->string('desc_no_sello');
            $table->string('id_sap_pegotin');
            $table->string('img_si_pegotin');
            $table->string('img_no_pegotin');
            $table->string('desc_si_pegotin');
            $table->string('desc_no_pegotin');
            $table->string('id_sap_display');
            $table->string('img_si_display');
            $table->string('img_no_display');
            $table->string('desc_si_display');
            $table->string('desc_no_display');
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
        Schema::dropIfExists('empaques');
    }
};
