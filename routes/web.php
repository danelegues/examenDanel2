<?php
use App\Http\Controllers\DentistaController;
use App\Http\Controllers\ClienteController;


use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('index');
});


//--------------------[ CONTROLADOR DENTISTA ]---------------------------------------------------------------
Route::get('/dentistas', [DentistaController::class, 'dentistas' ]);
Route::get('/dentistas/index', [DentistaController::class, 'index' ]);
Route::get('/dentistas/create', [DentistaController::class, 'create' ]);
Route::get('/dentistas/edit', [DentistaController::class, 'edit' ]);

Route::post('/dentistas/store', [DentistaController::class, 'store' ]);
Route::delete('/dentistas/destroy/{id}', [DentistaController::class, 'destroy' ]);

//--------------------[ CONTROLADOR DENTISTA ]---------------------------------------------------------------




//--------------------[ CONTROLADOR CLIENTE ]---------------------------------------------------------------
Route::get('/clientes', [ClienteController::class, 'clientes' ]);
Route::get('/clientes/index', [ClienteController::class, 'index' ]);
Route::get('/clientes/create', [ClienteController::class, 'create' ]);

Route::post('/clientes/store', [ClienteController::class, 'store' ]);


//--------------------[ CONTROLADOR CLIENTE ]---------------------------------------------------------------
