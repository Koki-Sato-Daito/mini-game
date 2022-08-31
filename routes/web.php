<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MiniGameController;

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

Route::get('/', [MiniGameController::class, 'start']);
Route::get('/name', [MiniGameController::class,'name']);
Route::post('/gameover', [MiniGameController::class, 'register']);
Route::get('/result', [MiniGameController::class, 'result']);
