<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PagesController::class, 'home']);

Route::get('/apropos', [PagesController::class, 'create']);

Route::get('/visualiser', [UserController::class, 'show']);

// Route::ressource('/', PagesController::class);

Route::post('/apropos', [UserController::class, 'store']);
