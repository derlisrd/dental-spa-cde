<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;
    protected $table = 'tratamientos';
    protected $fillable = ['servicio_id','empleado_id','utilizado_id','paciente_id','detalles','finalizado','sesion'];

    public function empleado (){
        return $this->belongsTo(Empleado::class,'empleado_id');
    }
    public function servicio (){
        return $this->belongsTo(Servicio::class,'servicio_id');
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class,'paciente_id');
    }

}
