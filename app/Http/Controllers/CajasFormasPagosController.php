<?php

namespace App\Http\Controllers;

use App\Models\CajasFormasPago;
use Illuminate\Http\Request;

class CajasFormasPagosController extends Controller
{
    //

    public function index(){
        $formas = CajasFormasPago::all();
        return view('CajasFormasPago.index',compact('formas'));
    }

    public function store(Request $r){
        $r->validate([
            'descripcion'=> ['required'],
            'porcentaje_descuento'=> ['required','numeric','max:10'],
            'tipo'=>['required'],
        ]);

        $datos = [
            'descripcion'=> $r->descripcion,
            'tipo'=> $r->tipo,
            'porcentaje_descuento'=>$r->porcentaje_descuento,
        ];


        CajasFormasPago::create($datos);
        return redirect()->route('cajas.formaspago')->with('add',true);
    }

    public function edit($id){
        $forma = CajasFormasPago::find($id);
        return view('CajasFormasPago.edit',compact('forma'));
    }

    public function update(Request $r,$id){

        $r->validate([
            'descripcion'=> ['required'],
            'porcentaje_descuento'=> ['required','numeric','max:10'],
            'tipo'=>['required'],
        ]);

        $datos = [
            'descripcion'=> $r->descripcion,
            'tipo'=> $r->tipo,
            'porcentaje_descuento'=>$r->porcentaje_descuento,
        ];

        CajasFormasPago::where('id',$id)->update($datos);
        return redirect()->route('cajas.formaspago')->with('updated',true);
    }

}
