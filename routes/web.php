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

Route::get('/', [\App\Http\Controllers\TodosController::class, 'index'])->name('todo.index');
Route::get('/todo', [\App\Http\Controllers\TodosController::class, 'index'])->name('todo.list');
Route::get('/todo/create', [\App\Http\Controllers\TodosController::class, 'store']);
Route::get('/todo/{id}', [\App\Http\Controllers\TodosController::class, 'show']);