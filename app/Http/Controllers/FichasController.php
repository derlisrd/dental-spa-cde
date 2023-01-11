<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Tratamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichasController extends Controller
{

    public function find(Request $r){

        $ficha = Ficha::where('paciente_id',$r->paciente_id)->first();
        $tratamientos = DB::table('tratamientos')
        ->select('servicios.descripcion','tratamientos.finalizado','tratamientos.created_at','tratamientos.id')
        ->join('servicios','servicios.id','=','tratamientos.servicio_id')
        ->where('paciente_id',$r->paciente_id)
        ->get();
        return view ('Fichas.find',compact('ficha','tratamientos'));
    }


}
