<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use App\Models\CajasMovimiento;
use App\Models\User;
use Illuminate\Http\Request;

class CajasController extends Controller
{


    public function index()
    {
        $cajas = Caja::all();
        return view('Cajas.index',compact('cajas'));
    }

    public function movimientos ($id){

        $caja = Caja::find($id);
        $movimientos = CajasMovimiento::where('caja_id',$id)->get();

        $tipos = ['1'=>'Ingreso','0'=>'Egreso','2'=>'Apertura','4'=>'Cierre','5'=>'Neutro'];

        return view('Cajas.movimientos',compact('movimientos','caja','tipos'));

    }
    public function all_movimientos(){

        $movimientos = CajasMovimiento::all();

        return view('Cajas.allmovimientos',compact('movimientos'));
    }


    public function create()
    {
        $users = User::all();
        return view('Cajas.createcaja',compact('users'));
    }

    public function store(Request $r)
    {
        $r->validate([
            'nombre'=> ['required','max:150'],
            'user_id'=>'required',
            'monto_inicial'=>['required','numeric'],
        ]);

        $datos = [
            'nombre'=> $r->nombre,
            'user_id'=> $r->user_id,
            'monto_inicial'=> $r->monto_inicial,
            'monto_actual'=>$r->monto_inicial,
            'monto_sin_efectivo'=> 0,
            'estado'=>$r->estado ? 1 : 0,
            'monto_cierre'=>0,
            'fecha_apertura'=> $r->estado ? now() : null
        ];
        $caja = Caja::create($datos);

        $movimientos = [
            'caja_id'=>$caja->id,
            'monto'=>$r->monto_inicial,
            'monto_sin_efectivo'=> 0,
            'tipo'=>2,
            'detalles'=>'Apertura de caja con monto '.$r->monto_inicial
        ];
        CajasMovimiento::create($movimientos);

        return redirect()->route('cajas')->with('caja_agregada',true);
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
