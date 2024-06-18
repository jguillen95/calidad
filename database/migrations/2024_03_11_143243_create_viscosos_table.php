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
        Schema::create('viscosos', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('id_sap');
            $table->string('img_si');
            $table->string('img_no');
            $table->string('desc_si');
            $table->string('desc_no');
            $table->string('lote');
            $table->string('cad');
            $table->string('densidad');
            $table->string('ph');
            $table->string('viscosidad');
            $table->string('img_extra');
            $table->bigInteger('criterios_id')->unsigned();
            $table->foreign('criterios_id')->references('id')->on('criterios');
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
        Schema::dropIfExists('viscosos');
    }
};
