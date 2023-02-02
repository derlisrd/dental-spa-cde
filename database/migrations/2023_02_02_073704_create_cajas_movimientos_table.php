<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas_movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caja_id')->nullable()->constrained('cajas')->cascadeOnUpdate()->nullOnDelete();
            $table->float('monto',20)->default(0);
            $table->float('monto_sin_efectivo',20)->default(0);
            $table->bigInteger('tipo')->comment('0 egreso 1 ingreso 2 apertura');
            $table->text('detalles')->nullable();
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
        Schema::dropIfExists('cajas_movimientos');
    }
}
