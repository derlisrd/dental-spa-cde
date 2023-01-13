<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use App\Models\Utilizado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilizadosController extends Controller
{

    public function proceder(Request $r){

        $id = $r->id;
        $utilizados = DB::table('utilizados')
        ->select('servicios.descripcion','utilizados.tratamiento_id','insumos.nombre','utilizados.cantidad','utilizados.created_at','insumos.medida')
        ->join('insumos','insumos.id','=','utilizados.insumo_id')
        ->join('tratamientos','tratamientos.id','=','utilizados.tratamiento_id')
        ->join('servicios','servicios.id','=','tratamientos.servicio_id')
        ->where(['tratamiento_id' => $id])
        ->orderByDesc('utilizados.id')->get();

        $paciente = DB::table('pacientes')
        ->select('pacientes.nombre','pacientes.apellido','pacientes.doc','pacientes.id')
        ->join('tratamientos','tratamientos.paciente_id','=','pacientes.id')
        ->where(['tratamientos.id' => $id])
        ->first();


        return view('Utilizados.proceder',compact('id','utilizados','paciente'));
    }

    public function procesar(Request $r){

        $r->validate([
            'cantidad'=> ['required','numeric'],
            'insumo_id'=> ['required'],
            'tratamiento_id'=>['required'],
        ]);


        Utilizado::create([
            'tratamiento_id'=>$r->tratamiento_id,
            'insumo_id'=>$r->insumo_id,
            'cantidad'=>$r->cantidad
        ]);

        $insumo = Insumo::find($r->insumo_id);

        $cantidad_old = $insumo->cantidad;
        $new_cantidad = $cantidad_old - $r->cantidad;
        $insumo->cantidad = $new_cantidad;
        $insumo->update();

        return redirect()->back();

    }
}
