<?php

namespace App\Http\Controllers;

use App\Models\Comisiones;
use App\Models\Empleado;
use Illuminate\Http\Request;

class ComisionesController extends Controller
{

    public function index(Request $r){
        if($r->search){
            $like = '%'.$r->search.'%';
            $empleado = Empleado::where([['nombre','like',$like]])
            ->orWhere([['apellido','like',$like]])
            ->orWhere([['doc','like',$like]])
            ->first();
            if($empleado){
                $comisiones = Comisiones::where('empleado_id',$empleado->id)
                ->get();
            }else{
                $comisiones = [];
            }

        }else{
            $comisiones = Comisiones::all();
        }

        return view('Comisiones.index',compact('comisiones'));
    }

    public function pagar(Request $r){
        $comision = Comisiones::find($r->id);
        return view('Comisiones.pagar',compact('comision'));
    }

    public function pagar_update(Request $r){
        $comision = Comisiones::find($r->id);
        $comision->pagado = true;
        $comision->update();
        return redirect()->route('empleados.comisiones.pagar',$comision->id)->with('pagado',true);
    }
}
