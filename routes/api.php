<?php

use App\Http\Controllers\GurbaniController;
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

Route::get('/find/{type}/{query}', [GurbaniController::class, 'find']);

Route::get('/hukamnama/{day?}', [GurbaniController::class, 'hukamnama']);

Route::get('/{type}/{ids}', [GurbaniController::class, 'fetch']);
