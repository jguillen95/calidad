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
        Schema::create('capsulas', function (Blueprint $table) {
            $table->id();
            $table->string('sap_id_liner');
            $table->string('img_si_liner');
            $table->string('img_no_liner');
            $table->string('desc_si_liner');
            $table->string('desc_no_liner');
            $table->string('sap_id_extra');
            $table->string('img_si_comodin');
            $table->string('img_no_comodin');
            $table->string('desc_si_comodin');
            $table->string('desc_no_comodin');
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
        Schema::dropIfExists('capsulas');
    }
};
