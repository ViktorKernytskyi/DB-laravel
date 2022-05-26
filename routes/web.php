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

//Route::get('/list', [HomeController::class, 'list'])->name('users.list');
//Route::get('/form/{id?}', [HomeController::class, 'form'])->name('users.form');
//Route::get('/update', [HomeController::class, 'update'])->name('users.update');

Route::as('users.')->group(function (){
    Route::get('/list', [HomeController::class, 'list'])->name('list');
    Route::get('/form/{variable?}', [HomeController::class, 'form'])->name('form');
    Route::post('/create{user?}/{email?}/{password?}/', [HomeController::class, 'create'])->name('create');
    Route::put('/update/{user?}', [HomeController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [HomeController::class, 'destroy'])->name('destroy');
});
