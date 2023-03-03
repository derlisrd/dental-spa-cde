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
            'valor'=>['numeric'],
            'valor'=>['numeric','required'],
            'uso_normal'=>'numeric',
            'medida'=>['required'],
            'codigo'=>['required','unique:insumos,codigo'],
        ]);

        $datos = [
            'nombre'=> $request->nombre,
            'valor'=> $request->valor,
            'costo'=>$request->costo,
            'uso_normal'=>$request->uso_normal,
            'cantidad'=>$request->cantidad,
            'medida'=>$request->medida,
            'codigo'=>$request->codigo
        ];

        Insumo::create($datos);

        return redirect()->route('insumos');
    }

    public function edit_stock($id){
        $insumo = Insumo::findOrFail($id);

        return view('Insumos.corregir',compact('insumo'));
    }

    public function update_stock(Request $r){

        $id = $r->id;

        $r->validate([
            'cantidad'=> ['required','numeric'],
        ]);


        $insumo = Insumo::find($id);
        $insumo->cantidad = $r->cantidad;
        $insumo->update();

        return redirect()->route('insumos')->with('corregido',true);
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
