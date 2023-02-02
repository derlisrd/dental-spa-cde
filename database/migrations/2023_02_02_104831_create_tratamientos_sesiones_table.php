<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientosSesionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos_sesiones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tratamiento_id')->nullable()->constrained('tratamientos')->cascadeOnUpdate()->nullOnDelete();
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
        Schema::dropIfExists('tratamientos_sesiones');
    }
}
