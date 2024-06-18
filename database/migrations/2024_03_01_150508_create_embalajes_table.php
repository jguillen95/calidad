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
        Schema::create('embalajes', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->string('codigo_emb');
            $table->string('descripcion');
            $table->bigInteger('pterminado_id')->unsigned();
            $table->foreign('pterminado_id')->references('id')->on('pterminados');
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
        Schema::dropIfExists('embalajes');
    }
};
