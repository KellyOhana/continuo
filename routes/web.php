<?php

use App\Http\Controllers\PublisherController;
use App\Http\Controllers\Publishers;
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

Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers.index');

// outro modo de escrever a action
Route::post('/publishers', 'PublisherController@store')->name('publishers.store');
Route::get('/publishers/{publisher}', 'PublisherController@show')->name('publishers.show');
Route::put('/publishers/{publisher}', 'PublisherController@update')->name('publishers.update');
Route::delete('/publishers/{publisher}', 'PublisherController@destroy')->name('publishers.destroy');
