<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){

        $empleados = Empleado::all();
        return view('Empleados.index',compact('empleados'));
    }

    public function edit(Request $r,$id){

        $emp = Empleado::find($id);
        return view('Empleados.edit',compact('emp'));
    }

    public function store(Request $r){
        $r->validate([
            'doc'=> ['required','unique:empleados,doc'],
            'nombre'=> ['required','max:150'],
            'apellido'=>['required'],
            'labor'=>['required'],
        ]);

        $datos = [
            'doc'=> $r->doc,
            'nombre'=> $r->nombre,
            'apellido'=>$r->apellido,
            'labor'=>$r->labor,
        ];

        Empleado::create($datos);
        return redirect()->route('empleados')->with('add',true);

    }

    public function update(Request $r,$id){

        $r->validate([
            'doc'=> ['required',"unique:empleados,doc,id,$id"],
            'nombre'=> ['required','max:150'],
            'apellido'=>['required'],
            'labor'=>['required'],
        ]);

        $datos = [
            'doc'=> $r->doc,
            'nombre'=> $r->nombre,
            'apellido'=>$r->apellido,
            'labor'=>$r->labor,
        ];

        Empleado::where('id',$id)->update($datos);

        return redirect()->route('empleados')->with('updated',true);

    }
}
