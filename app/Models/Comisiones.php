<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comisiones extends Model
{
    use HasFactory;
    protected $table = 'comisiones';
    protected $fillable = [
        'tratamiento_id','servicio_id','paciente_id','empleado_id','valor_total','valor_comision','descuento','detalles','pagado'
    ];

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
    public function tratamiento (){
        return $this->belongsTo(Tratamiento::class);
    }
    public function servicio(){
        return $this->belongsTo(Servicio::class);
    }
}
