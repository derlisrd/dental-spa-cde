<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Models\Empleado;
use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientosController extends Controller
{

    public function index()
    {
        $tratamientos = Tratamiento::all();
        return view('Tratamientos.index',compact('tratamientos'));
    }


    public function add()
    {
        $data = [
            'servicios'=>Servicio::all(),
            'empleados'=>Empleado::all(),
            'pacientes'=>Paciente::all()
        ];
        return view('Tratamientos.add',$data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'empleado_id'=> ['required'],
            'servicio_id'=> ['required'],
            'paciente_id'=>['required'],
            'detalles'=>['string'],
            'abono'=>['numeric'],
            'valor_total'=>['required','numeric']
        ]);

        $datos = [
            'empleado_id'=> $request->empleado_id,
            'servicio_id'=> $request->servicio_id,
            'paciente_id'=>$request->paciente_id,
            'detalles'=>$request->detalles,
            'valor_total'=>$request->valor_total
        ];

        $t = Tratamiento::create($datos);
        Abono::create([
            'paciente_id'=>$request->paciente_id,
            'tratamiento_id'=>$t->id,
            'abono_valor'=>$request->abono_valor
        ]);

        return redirect()->route('utilizado.tratamiento.proceder',$t->id);
    }


}
