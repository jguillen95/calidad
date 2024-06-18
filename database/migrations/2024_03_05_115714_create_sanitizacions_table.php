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
        Schema::create('sanitizacions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('h_inicio');
            $table->string('h_final');
            $table->string('p_anterior');
            $table->string('p_entrada');
            $table->string('equipo');
            $table->string('observaciones');
            $table->string('nombre_supervisor');
            $table->string('firma_supervisor');
            $table->string('nombre_calidad');
            $table->string('firma_calidad');
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
        Schema::dropIfExists('sanitizacions');
    }
};
