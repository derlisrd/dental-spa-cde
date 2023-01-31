<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Models\Tratamiento;
use Illuminate\Http\Request;

class AbonosController extends Controller
{


    public function find($id){

        $tratamiento = Tratamiento::find($id);
        if($tratamiento){
            $abonos = Abono::where('tratamiento_id',$id)->get();
            //$total = $abonos->sum('abono_valor');

            return view('Abonos.abonar',compact('tratamiento','abonos'));
        }
        abort(404);

    }


}
