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
        Schema::create('reactividads', function (Blueprint $table) {
            $table->id();
            $table->string('estabilidad_q');
            $table->string('condiciones_e');
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
        Schema::dropIfExists('reactividads');
    }
};
