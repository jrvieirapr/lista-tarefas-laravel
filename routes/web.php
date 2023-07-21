<?php

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\TipoController;
use App\Models\Tarefa;
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

Route::get('/', function () {
    return redirect()->route('tarefas.index');
});


Route::resource('tipos',TipoController::class);

Route::resource('tarefas',TarefaController::class);

