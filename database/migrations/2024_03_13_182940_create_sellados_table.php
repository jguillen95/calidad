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
        Schema::create('sellados', function (Blueprint $table) {
            $table->id();
            $table->string('img_si_sellado');
            $table->string('img_no_sellado');
            $table->string('desc_si_sellado');
            $table->string('desc_no_sellado');
            $table->string('img_si_acondicion');
            $table->string('img_no_acondicion');
            $table->string('desc_si_acondicion');
            $table->string('desc_no_acondicion');
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
        Schema::dropIfExists('sellados');
    }
};
