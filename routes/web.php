<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [\App\Http\Controllers\BbsController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/create', [HomeController::class, 'create'])
    ->name('bb.create');

Route::post('/home', [HomeController::class, 'store'])
    ->name('bb.store');

Route::get('/home/{bb}/edit', [HomeController::class, 'edit'])
    ->name('bb.edit')->middleware('can:update,bb');

Route::patch('/home/{bb}', [HomeController::class, 'update'])
    ->name('bb.update')->middleware('can:update,bb');

Route::get('/home/{bb}/delete', [HomeController::class, 'delete'])
    ->name('bb.delete')->middleware('can:destroy,bb');

Route::delete('/home/{bb}', [HomeController::class, 'destroy'])
    ->name('bb.destroy')->middleware('can:destroy,bb');

Route::get('/{bb}', [\App\Http\Controllers\BbsController::class, 'detail'])->name('detail');


