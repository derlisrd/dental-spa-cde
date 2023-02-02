<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasFormasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas_formas_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->boolean('tipo')->default(1)->comment('0 no efec. 1 efec');
            $table->float('porcentaje_descuento')->default(0);
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
        Schema::dropIfExists('cajas_formas_pagos');
    }
}
