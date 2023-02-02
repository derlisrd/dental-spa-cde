<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajasMovimiento extends Model
{
    use HasFactory;
    protected $table = 'cajas_movimientos';
    protected $fillable = ['caja_id','monto','monto_sin_efectivo','tipo','detalles'];


    public function caja (){

        return $this->belongsTo(Caja::class,'caja_id');
    }
}
