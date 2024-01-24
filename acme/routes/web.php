<?php

use App\Http\Controllers\DesenvolvedorController;
use App\Http\Controllers\EquipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EquipeController::class, 'index']);
Route::get('/desenvolvedor', [DesenvolvedorController::class, 'index']);


//Rotas Dinamicas
Route::get('/{id}/desenvolvedor/add', [DesenvolvedorController::class, 'add']);
Route::post('/desenvolvedor/{id}', [DesenvolvedorController::class, 'store']);