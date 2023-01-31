<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tratamiento_id')->nullable()->constrained('tratamientos')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('servicio_id')->nullable()->constrained('servicios')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('paciente_id')->nullable()->constrained('pacientes')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('empleado_id')->nullable()->constrained('empleados')->cascadeOnUpdate()->nullOnDelete();
            $table->float('valor_total',15);
            $table->float('valor_comision',15);
            $table->float('descuento',15)->nullable();
            $table->text('detalles')->nullable();
            $table->boolean('pagado')->default(0);
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
        Schema::dropIfExists('comisiones');
    }
}
