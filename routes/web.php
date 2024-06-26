<?php

use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home']);

Route::get('/search', [WebController::class, 'search']);

Route::get('/nitnem', [WebController::class, 'nitnem']);

Route::get('/hukamnama/{date?}', [WebController::class, 'hukamnama']);

Route::get('/sggs/{ang?}/{shabad?}/{line?}', [WebController::class, 'fetch']);
