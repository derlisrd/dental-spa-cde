<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajasFormasPago extends Model
{
    use HasFactory;

    protected $table = 'cajas_formas_pagos';
    protected $fillable = ['descripcion','porcentaje_descuento','tipo'];
}
