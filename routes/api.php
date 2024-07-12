<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/estrategiaWMS/{cdEstrategia}/{dsHora}/{dsMinuto}/{prioridade}', [App\Http\Controllers\getHorarioController::class, 'index']);
Route::post('/post', [App\Http\Controllers\getHorarioController::class, 'post']);