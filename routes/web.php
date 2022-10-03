<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PDFController;
use App\Task;
use Illuminate\Http\Request;
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


Route::get('/', [PagesController::class, 'home'])->name('homeLink');
Route::get('/apropos', [PagesController::class, 'create'])->name('formMessageLink');
Route::get('/taches', [PagesController::class, 'navTask'])->name('taskLink');

Route::get('create_pdf', [PDFController::class, 'index'])->name('create_pdf');
Route::get('create_pdfDDER', [PDFController::class, 'pdfDDER']);

Route::get('/visualiser', [UserController::class, 'show'])->name('showListLink');

// Route::ressource('/', PagesController::class);

Route::post('/about', [UserController::class, 'store'])->name('addMessage');
Route::post('/task', [UserController::class, 'saveTask'])->name('addTask');

route::delete('/task/{task_id}', [UserController::class, 'destroy']);