<?php

use App\Http\Controllers\SessionController;
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

Route::get('/login', [SessionController::class, 'loginForm']);
Route::get('/loginData', [SessionController::class, 'loginUser']);



// Route::get('/mostrarPelicules/{titulo?}', function ($titulo="No hay pelicula") {
//     return view('peliculas', array(
//         'titulo' =>$titulo
//     ));
// });

// Route::get('/listado', function () {
//     $titulo = "Listado de peliculas";
//     $peliculas = array("Batman", "Spiderman", "Thor");
//     return view('listado', array(
//         'titulo' =>$titulo,
//         'peliculas' => $peliculas,
//     ));
// });






