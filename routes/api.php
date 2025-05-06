<?php

use App\Http\Controllers\PublisherController;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Para fazer todas as rotas de uma vez:
// Route::apiResource('publishers', PublisherController::class);

Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers.index');
Route::post('/publishers', [PublisherController::class, 'store'])->name('publishers.store');
Route::get('/publisher/{publisher}', [PublisherController::class, 'show'])->name('publishers.show');
Route::put('/publisher/{publisher}', [PublisherController::class, 'update'])->name('publishers.update');
Route::delete('/publisher/{publisher}', [PublisherController::class, 'destroy'])->name('publishers.destroy');
