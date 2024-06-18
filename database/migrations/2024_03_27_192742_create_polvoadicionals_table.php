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
        Schema::create('polvoadicionals', function (Blueprint $table) {
            $table->id();
            $table->string('sap_id_desecante');
            $table->string('img_si_desecante');
            $table->string('img_no_desecante');
            $table->string('desc_si_desecante');
            $table->string('desc_no_desecante');
            $table->string('sap_id_termo');
            $table->string('img_si_termo');
            $table->string('img_no_termo');
            $table->string('desc_si_termo');
            $table->string('desc_no_termo');
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
        Schema::dropIfExists('polvoadicionals');
    }
};
