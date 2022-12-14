<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('Pacientes.index',compact('pacientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> ['required'],
            'apellido'=> ['required'],
            'edad'=>['required'],
            'sexo'=>['required'],
            'doc'=>['required'],
            'contacto'=>['required']
        ]);

        $datos = [
            'nombre'=> $request->nombre,
            'apellido'=> $request->apellido,
            'edad'=>$request->edad,
            'sexo'=>$request->sexo,
            'doc'=>$request->doc,
            'contacto'=>$request->contacto
        ];

        $paciente = Paciente::create($datos);
        $ficha = Ficha::create([
            'paciente_id'=> $paciente->id
        ]);


        return redirect()->route('ficha',$ficha->id);

    }

}
