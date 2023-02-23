<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('cors')->group(function () {
    // tus rutas de la API aquí
    Route::get('sensores/{sen}/{val}', ['as' => 'sensores', 'uses' => 'App\Http\Controllers\SensorController@create']);

Route::get('sensores', ['as' => 'sensores.all', 'uses' => 'App\Http\Controllers\SensorController@all']);

Route::get('elementos', ['as' => 'elementos.all', 'uses' => 'App\Http\Controllers\ElementoController@getEstatus']);

Route::get('elemento-update/{name}/{status}', ['as' => 'elemento.update', 'uses' => 'App\Http\Controllers\ElementoController@updateStatus']);
});




