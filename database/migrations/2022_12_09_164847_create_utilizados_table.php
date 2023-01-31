<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tratamiento_id')->nullable()->constrained('tratamientos')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('insumo_id')->nullable()->constrained('insumos')->cascadeOnUpdate()->nullOnDelete();
            $table->double('cantidad');
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
        Schema::dropIfExists('utilizados');
    }
}
