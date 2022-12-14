<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumosController extends Controller
{

    public function index()
    {
        $insumos = Insumo::all();
        return view('Insumos.index',compact('insumos'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> ['required'],
            'cantidad'=> ['required','numeric'],
            'valor'=>['required','numeric'],
            'medida'=>['required'],
            'codigo'=>['required','unique:insumos,codigo'],
        ]);

        $datos = [
            'nombre'=> $request->nombre,
            'valor'=> $request->valor,
            'cantidad'=>$request->cantidad,
            'medida'=>$request->medida,
            'codigo'=>$request->codigo
        ];

        Insumo::create($datos);

        return redirect()->route('insumos');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
