<?php

namespace App\Http\Controllers;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empleado_id'=> ['required'],
            'servicio_id'=> ['required'],
            'paciente_id'=>['required'],
            'detalles'=>['string']
        ]);

        $datos = [
            'empleado_id'=> $request->empleado_id,
            'servicio_id'=> $request->servicio_id,
            'paciente_id'=>$request->paciente_id,
            'detalles'=>$request->detalles,
        ];

        $t = Tratamiento::create($datos);


        return redirect()->route('tratamientos.proceder',$t->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
