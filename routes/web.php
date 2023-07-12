<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(TaskController::class)->prefix('tasks')->group(function () {
    Route::get('/',  'index')->name('tasks.index');
    Route::get('/create',  'create')->name('tasks.create');
    Route::post('/store',  'store')->name('tasks.store');
    Route::get('/edit/{id}',  'edit')->name('tasks.edit');
    Route::post('/update/{id}',  'update')->name('tasks.update');
    Route::delete('/destroy/{id}',  'destroy')->name('tasks.destroy');
});