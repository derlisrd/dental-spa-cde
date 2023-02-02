<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','nombre','monto_inicial','monto_actual','monto_sin_efectivo','monto_cierre','fecha_cierre','fecha_apertura','estado'];

    public function user (){
        return $this->belongsTo(User::class,'user_id');
    }
}
