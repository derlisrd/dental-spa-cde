<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Models\Caja;
use App\Models\CajasFormasPago;
use App\Models\CajasMovimiento;
use App\Models\Comisiones;
use App\Models\Empleado;
use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Tratamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TratamientosController extends Controller
{

    public function index()
    {
        $tratamientos = Tratamiento::all();
        return view('Tratamientos.index',compact('tratamientos'));
    }


    public function add()
    {
        $id = Auth::id();
        $data = [
            'empleados'=>Empleado::all(),
            'formas_pago'=>CajasFormasPago::all(),
            'caja'=>Caja::where('user_id',$id)->get(),
        ];
        return view('Tratamientos.add',$data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'empleado_id'=> ['required'],
            'servicio_id'=> ['required'],
            'paciente_id'=>['required'],

            'abono'=>['numeric'],
            'valor_total'=>['required','numeric'],
            'forma_pago_id'=>'required',
            'caja_id'=>'required'
        ]);



        $datos = [
            'empleado_id'=> $request->empleado_id,
            'servicio_id'=> $request->servicio_id,
            'paciente_id'=>$request->paciente_id,
            'detalles'=>$request->detalles,
            'valor_total'=>$request->valor_total
        ];
        $t = Tratamiento::create($datos);

        $comision_calculado = $request->valor_total * $request->porcentaje_comision_servicio / 100;



        Comisiones::create([
            'paciente_id'=>$request->paciente_id,
            'empleado_id'=> $request->empleado_id,
            'tratamiento_id'=>$t->id,
            'servicio_id'=>$request->servicio_id,
            'valor_total'=>$request->valor_total,
            'valor_comision'=>$comision_calculado
        ]);

        Abono::create([
            'paciente_id'=>$request->paciente_id,
            'tratamiento_id'=>$t->id,
            'abono_valor'=>$request->abono_valor
        ]);

        $formas_pago = CajasFormasPago::find($request->forma_pago_id);

        $caja = Caja::find($request->caja_id);
        if($request->forma_pago_id == 1){
            $caja->monto_actual += $request->abono_valor;
        }else{
            $caja->monto_sin_efectivo += $request->abono_valor;
        }
        $caja->update();

        CajasMovimiento::create([
            'tipo'=>1,
            'detalles'=>'Abono de tratamiento. '.$request->detalles,
            'caja_id'=>$request->caja_id,
            'monto'=> $request->forma_pago_id == 1 ? $request->abono_valor : 0,
            'monto_sin_efectivo'=> $request->forma_pago_id == 1 ? 0 : $request->abono_valor,
        ]);


        return redirect()->route('utilizado.tratamiento.proceder',$t->id);
    }


}
