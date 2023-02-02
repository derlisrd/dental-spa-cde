<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('Servicios.index',compact('servicios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'precio'=> ['required','numeric'],
            'descripcion'=> ['required','max:150'],
            'comision'=>['required','numeric','max:100'],
            'codigo'=>['required','unique:servicios,codigo'],
        ]);

        $datos = [
            'precio'=> $request->precio,
            'comision'=> $request->comision,
            'descripcion'=>$request->descripcion,
            'codigo'=>$request->codigo,
        ];

        Servicio::create($datos);
        return redirect()->route('servicios.add')->with('add',true);
    }

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
