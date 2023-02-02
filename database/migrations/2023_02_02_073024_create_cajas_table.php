<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->string('nombre');
            $table->float('monto_inicial',20);
            $table->float('monto_actual',20);
            $table->float('monto_sin_efectivo',20)->nullable();
            $table->float('monto_cierre',20)->nullable();
            $table->dateTime('fecha_apertura')->nullable();
            $table->dateTime('fecha_cierre')->nullable();
            $table->boolean('estado')->default(0)->comment('abierto o cerrado');
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
        Schema::dropIfExists('cajas');
    }
}
