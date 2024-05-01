<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TamuController;
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


Route::get('/', [LamanController::class, 'index']);
Route::post('/user/store', [LamanController::class, 'store'])->name('user.store');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/sesi/login', [LoginController::class, 'login'])->name('login');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
Route::get('/settings/create', [DashboardController::class, 'create'])->name('create');
Route::post('/settings/store', [DashboardController::class, 'store'])->name('store');
Route::get('/settings/{id}/edit', [DashboardController::class, 'edit'])->name('edit');
Route::put('/settings/{id}/update', [DashboardController::class, 'update'])->name('update');
Route::delete('/settings/delete/{id}', [DashboardController::class, 'delete'])->name('delete');

// about us
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/about/create1', [AboutController::class, 'create1'])->name('create1');
Route::post('/about/store1', [AboutController::class, 'store1'])->name('store1');
Route::get('/about/{id}/edit1', [AboutController::class, 'edit1'])->name('edit1');
Route::put('/about/{id}/update1', [AboutController::class, 'update1'])->name('update1');
Route::delete('/about/delete1/{id}', [AboutController::class, 'delete1'])->name('delete1');

// Contac us
Route::get('/contac', [ContacController::class, 'contac'])->name('contac');
Route::get('/contac/create2', [ContacController::class, 'create2'])->name('create2');
Route::post('/contac/store2', [ContacController::class, 'store2'])->name('store2');
Route::get('/contac/{id}/edit2', [ContacController::class, 'edit2'])->name('edit2');
Route::put('/contac/{id}/update2', [ContacController::class, 'update2'])->name('update2');
Route::delete('/contac/delete2/{id}', [ContacController::class, 'delete'])->name('delete2');




Route::get('/tamu', [TamuController::class, 'index'])->name('tamu');
