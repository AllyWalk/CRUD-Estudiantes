<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;

Route::resource('students', StudentController::class);
Route::resource('careers', CareerController::class);

// Redirige la raíz al listado de estudiantes
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Crea todas las rutas del CRUD automáticamente
Route::resource('students', StudentController::class);