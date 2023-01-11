<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilizado extends Model
{
    use HasFactory;
    protected $table = 'utilizados';
    protected $fillable = ['tratamiento_id','insumo_id','cantidad'];

    public function tratamiento (){
        return $this->belongsTo(Tratamiento::class,'id');
    }

}
