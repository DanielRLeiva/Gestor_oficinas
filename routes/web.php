<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\OficinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oficinas', [OficinaController::class, 'index'])->name('listaoficinas');
Route::get('/oficinas/{id}', [OficinaController::class, 'show'])->name('mostraroficinas');
Route::get('/crearoficina', [OficinaController::class, 'create'])->name('crearoficina');
Route::post('/oficinas', [OficinaController::class, 'store'])->name('guardaroficina');

Route::get('/empleados/oficina/{oficina}', [EmpleadoController::class, 'index'])->name('listaempleados');
Route::get('/empleados/{id}', [EmpleadoController::class, 'show'])->name('mostrarempleados');
Route::get('/empleados/oficina/{oficina}/crearempleado', [EmpleadoController::class, 'create'])->name('crearempleado');
Route::post('/empleados/oficina/{oficina}', [EmpleadoController::class, 'store'])->name('guardarempleado');
Route::get('/empleados/{id}/editarempleado', [EmpleadoController::class, 'edit'])->name('editarempleado');
Route::put('/editarempleado/{id}', [EmpleadoController::class, 'update'])->name('actualizarempleado');
