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
        Schema::create('mezcla_items', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('i_mezcla');
            $table->string('f_mezcla');
            $table->string('tiempo');
            $table->string('apariencia');
            $table->string('color');
            $table->string('olor');
            $table->string('cumple');
            $table->string('firma_realizo');
            $table->string('firma_verifico');
            $table->bigInteger('mezcla_id')->unsigned();
            $table->foreign('mezcla_id')->references('id')->on('mezclas');
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
        Schema::dropIfExists('mezcla_items');
    }
};
