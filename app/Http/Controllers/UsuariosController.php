<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){

        $usuarios = User::all();
        return view('Usuarios.index',compact('usuarios'));
    }
}
