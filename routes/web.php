<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RecipesController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('home/create', [HomeController::class, 'create'])->name('create');

Route::post('/home/store', [HomeController::class, 'recipestore'])->name('r.store');

Route::get('/detail/{recipes}', [RecipesController::class, 'detail']);

Route::get('/home/{recipes}/edit', [HomeController::class, 'edit'])->name('r.edit');

Route::patch('/home/{recipes}/update', [HomeController::class, 'update'])->name('r.update');

Route::get('/home/{recipes}/delete', [HomeController::class, 'delete'])->name('r.delete');

Route::delete('/home/{recipes}/destroy', [HomeController::class, 'destroy'])->name('r.destroy');
