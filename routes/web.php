<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/servicios', [PaginaController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
