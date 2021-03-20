<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\SeriesController;
Route::get('/series', [SeriesController::class, 'index'])
    ->name('listar_series');
Route::get('/series/criar', [SeriesController::class, 'create'])
    ->name('form_criar_serie');
Route::post('/series/criar', [SeriesController::class, 'store']);
Route::post('/series/remover/{id}', [SeriesController::class, 'destroy']);

use App\Http\Controllers\TemporadasController;
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);
