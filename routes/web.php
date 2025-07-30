<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/empleados', function() {
//     return view('empleados.index');
// });
// Route::get('empleados/create',[EmpleadoController::class,'create']);
Route::resource('empleados', EmpleadoController::class);