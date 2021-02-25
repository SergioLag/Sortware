<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
/*
if (View::exists('vista1')){
    Route::get('/', function () {
        return view('vista1', ['nombre'=>'Sergio']);
    });
}else{
    Route::get('/', function () {
        return 'la vista solicitada no existe';
    });
}*/

//Route::get('/', 'App\Http\Controllers\InicioController@index');

//Route::resource('/', 'App\Http\Controllers\Productocontroller');
/*
Route::get('/', function(){
    return view('vista1', ['nombre'=>'Sergio']);
});*/

Route::get('/', function(){
    return view('auth.login');
});

Route::resource('productos', 'App\Http\Controllers\Productocontroller');
Route::resource('usuarios', 'App\Http\Controllers\Usercontroller');


Route::get('/dash/crud', function(){
    return view('crud.index');
});

Route::get('/dash/crud/create', function(){
    return view('crud.create');
});










//ejemplo regresando texto
Route::get('/texto', function(){
    return '<h1>texto de prueba</h1>';
});

//ejemplo2 regresando texto
Route::get('/arreglo', function(){
    $arreglo = [
        'Id' => '1',
        'Descripción' => 'Producto 1'
    ];
    return $arreglo;
});

//ejemplo3 regresando texto
Route::get('/nombre/{nombre}', function($nombre){
    
    return '<h1>el nombre es: '.$nombre.'</h1>';
});

//ejemplo4 regresando texto
Route::get('/cliente/{cliente?}', function($cliente='Cliente General'){
    
    return '<h1>el Cliente es: '.$cliente.'</h1>';
});

//ejemplo5 regresando texto
Route::get('/ruta1', function(){
    return '<h1>esta es la vista de la ruta 1</h1>';
})->name('rutaNro1');

Route::get('/ruta2', function(){
    //return '<h1>esta es la vista de la ruta 2</h1>';
    return redirect() -> route('rutaNro1');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
