<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilizado extends Model
{
    use HasFactory;
    protected $table = 'utilizado';

    protected $fillable = ['tratamiento_id','insumo_id','cantidad'];
}
