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
        Schema::create('limpiezas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('linea');
            $table->string('lote');
            $table->string('orden');
            $table->string('producto');
            $table->string('presentacion');
            $table->string('verifico');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('q6');
            $table->string('q7');
            $table->string('q8');
            $table->string('q9');
            $table->string('q10');
            $table->string('nota');
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
        Schema::dropIfExists('limpiezas');
    }
};
