<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StranicaController;
use App\Http\Controllers\DogadjajController;
use App\Http\Controllers\PutovanjeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StranicaController::class, 'dogadjaji']);
Route::get('/dogadjaji', [StranicaController::class, 'dogadjaji']);
Route::get('/putovanja', [StranicaController::class, 'putovanja']);

Route::get('/dogadjaj/{dogadjaj}', [DogadjajController::class, 'show']);
Route::get('/putovanje/{putovanje}', [PutovanjeController::class, 'show']);

Route::prefix('api')->group(function () {
    Route::get('/dogadjaji/get', [DogadjajController::class, 'get']);

    Route::delete('/putovanja/destroy/{putovanje_id}', [PutovanjeController::class, 'destroy']);
    Route::get('/putovanja/get', [PutovanjeController::class, 'get']);

    Route::post('/studenti/store', [StudentController::class, 'store']);
});
