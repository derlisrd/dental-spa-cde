<?php

use App\Http\Controllers\AbonosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CajasController;
use App\Http\Controllers\CajasFormasPagosController;
use App\Http\Controllers\ComisionesController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\FichasController;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TratamientosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UtilizadosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::redirect('/login','/admin');
Route::view('/admin','Auth.login')->name('login')->middleware('guest');
Route::post('/admin',[LoginController::class,'login'])->name('login.post')->middleware('guest');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){


        Route::get('home', function () { return view('index');})->name('home');

        Route::get('cajas',[CajasController::class,'index'])->name('cajas');
        Route::get('cajas/create',[CajasController::class,'create'])->name('cajas.create');
        Route::post('cajas/create',[CajasController::class,'store'])->name('cajas.store');
        Route::get('cajas/{id}/movimientos',[CajasController::class,'movimientos'])->name('cajas.movimientos');
        Route::get('cajas/movimientos/all',[CajasController::class,'all_movimientos'])->name('cajas.all.movimientos');

        Route::get('formaspago',[CajasFormasPagosController::class,'index'])->name('cajas.formaspago');
        Route::view('formaspago/create','CajasFormasPago.add')->name('cajas.formaspago.create');
        Route::post('formaspago',[CajasFormasPagosController::class,'store'])->name('cajas.formaspago.store');
        Route::get('formaspago/edit/{id}',[CajasFormasPagosController::class,'edit'])->name('cajas.formaspago.edit');
        Route::put('formaspago/edit/{id}',[CajasFormasPagosController::class,'update'])->name('cajas.formaspago.update');

        Route::get('pacientes',[PacientesController::class,'index'])->name('pacientes');
        Route::view('pacientes/add','Pacientes.add')->name('pacientes.add');
        Route::post('pacientes/store',[PacientesController::class,'store'])->name('pacientes.store');
        Route::get('ficha/{paciente_id}',[FichasController::class,'find'])->name('ficha');

        Route::get('insumos',[InsumosController::class,'index'])->name('insumos');
        Route::view('insumos/add','Insumos.add')->name('insumos.add');
        Route::post('insumos/store',[InsumosController::class,'store'])->name('insumos.store');
        Route::get('insumos/{id}',[InsumosController::class,'edit'])->name('insumos.edit');
        Route::get('insumos/stock/{id}',[InsumosController::class,'edit_stock'])->name('insumos.edit.stock');
        Route::put('insumos/stock',[InsumosController::class,'update_stock'])->name('insumos.update.stock');


        Route::get('tratamientos',[TratamientosController::class,'index'])->name('tratamientos');
        Route::get('tratamientos/add',[TratamientosController::class,'add'])->name('tratamientos.add');
        Route::post('tratamientos/store',[TratamientosController::class,'store'])->name('tratamientos.store');

        Route::get('tratamiento/utilizado/{id}',[UtilizadosController::class,'proceder'])->name('utilizado.tratamiento.proceder');
        Route::post('tratamiento/procesar',[UtilizadosController::class,'procesar'])->name('utilizado.tratamiento.procesar');
        Route::get('abonos/{id}',[AbonosController::class,'find'])->name('abono');

        Route::get('empleados',[EmpleadosController::class,'index'])->name('empleados');
        Route::view('empleados/add','Empleados.add')->name('empleados.add');
        Route::get('empleados/edit/{id}',[EmpleadosController::class,'edit'])->name('empleados.edit');
        Route::post('empleados/store',[EmpleadosController::class,'store'])->name('empleados.store');
        Route::put('empleados/edit/{id}',[EmpleadosController::class,'update'])->name('empleados.update');

        Route::get('comisiones',[ComisionesController::class,'index'])->name('empleados.comisiones');
        Route::post('comisiones',[ComisionesController::class,'index'])->name('empleados.comisiones.search');
        Route::get('comisiones/pagar/{id}',[ComisionesController::class,'pagar'])->name('empleados.comisiones.pagar');
        Route::put('comisiones/pagar/{id}',[ComisionesController::class,'pagar_update'])->name('empleados.comisiones.pagar.update');

        Route::get('servicios',[ServiciosController::class,'index'])->name('servicios');
        Route::view('servicios/add','Servicios.add')->name('servicios.add');
        Route::post('servicios/store',[ServiciosController::class,'store'])->name('servicios.store');

        Route::get('ventas',[VentasController::class,'index'])->name('ventas');

        Route::get('/users',[UsersController::class,'index'])->name('users');
        Route::get('/users/create',[UsersController::class,'create'])->name('users.create');
        Route::post('/users',[UsersController::class,'store'])->name('users.store');

        Route::get('/users/profile',[ProfileController::class,'index'])->name('users.profile');
        Route::post('/users/profile',[ProfileController::class,'update'])->name('users.profile.update');
        Route::post('/users/profile/pass',[ProfileController::class,'pass'])->name('users.profile.save.pass');


    Route::get("logout",[LoginController::class,'logout'])->name("logout");



});
