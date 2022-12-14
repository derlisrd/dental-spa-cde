<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilizadosController extends Controller
{

    public function proceder(Request $r){

        $id = $r->id;
        return view('Utilizados.proceder',compact('id'));
    }
}
