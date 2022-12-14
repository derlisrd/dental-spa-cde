<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class FichasController extends Controller
{

    public function find(Request $r){

        $ficha = Ficha::where('paciente_id',$r->paciente_id)->first();

        return view ('Fichas.find',compact('ficha'));
    }


}
