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
        Schema::create('granels', function (Blueprint $table) {
            $table->id();
            $table->string('img_si_mezcla');
            $table->string('img_no_mezcla');
            $table->string('desc_si_mezcla');
            $table->string('desc_no_mezcla');
            $table->string('densidad');
            $table->string('ph');
            $table->string('viscosidad');
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
        Schema::dropIfExists('granels');
    }
};
