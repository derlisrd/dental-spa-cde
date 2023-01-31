<?php

namespace App\Http\Controllers;

use App\Models\Comisiones;
use Illuminate\Http\Request;

class ComisionesController extends Controller
{

    public function index(){
        $comisiones = Comisiones::all();
        return view('Comisiones.index',compact('comisiones'));
    }
}
