<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Apuesta;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('ligas', function(){
    $APIkey ='e2bedfc31c09518bf47f91677c2ce03ea7503dcfc5bf3559363cd5f1b3e0bc58';
    $dataLigas = Http::get("https://allsportsapi.com/api/football/?met=Leagues&APIkey=$APIkey")->json()['result'];
    // return var_dump($dataLigas);
    return view('apuestas.ligas' , compact('dataLigas'));
})->name('ligas');

Route::get('live', function(){

    $APIkey='e2bedfc31c09518bf47f91677c2ce03ea7503dcfc5bf3559363cd5f1b3e0bc58';
    $data = Http::get("https://allsportsapi.com/api/football/?met=Livescore&APIkey=$APIkey&timezone=America/Bogota")->json()['result'];

    // foreach($data as $key){
    //     $id = $key["event_key"];
    //     $posilidad =  Http::get("https://allsportsapi.com/api/football/?&met=Odds&matchId=$id&APIkey=$APIkey")->json();
    //     // return $posilidad; 
    //     // return $id;
    // }
    return view('apuestas.live', compact('data'));
})->name('live');

Route::get('apuestas', function (){//establece el metodo por donde se retonara la vista 
    $apuestas = Apuesta::all();//trae todo los registro de la tabla apuestas y los asigna a una variable
    return view('apuestas.MisApuestas', compact('apuestas'));//retorna a la vista seleccionada los datos que trae la variable anterior
})->name('misapuestas');

Route::post('/', function(Request $request){
    $newapuesta = new Apuesta;
    $newapuesta->codusuario = $request->input('codusuario');
    $newapuesta->id = $request->input('id');
    $newapuesta->apostado = $request->input('apostado');
    $newapuesta->rest_final = $request->input('rest_final');
    $newapuesta->estado = $request->input('estado');
    $newapuesta->save();
    return redirect()->Route('misapuestas')->with('success', 'Apuesta Guardada');
})->name('apostado');

Route::delete('apuestas/{id}', function($id){//se crea ruta para eliminar un elemento de la lista, se para un parametro (id) lo recibe la funcion
    $apuestas = Apuesta::findOrFail($id);
    $apuestas->delete();
    return redirect()->route('misapuestas')->with('delete', 'Apuesta eliminada');
})->name('apuestas.destroy');

