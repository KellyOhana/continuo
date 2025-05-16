<?php


use App\Http\Controllers\GameController;

use App\Http\Controllers\DeveloperController;

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
Route::get('/publishers/{publisher}', [PublisherController::class, 'show'])->name('publishers.show');
Route::put('/publishers/{publisher}', [PublisherController::class, 'update'])->name('publishers.update');
Route::delete('/publishers/{publisher}', [PublisherController::class, 'destroy'])->name('publishers.destroy');

Route::get('/developers', [DeveloperController::class, 'index'])->name('developers.index');
Route::post('/developers', [DeveloperController::class, 'store'])->name('developers.store');
Route::get('/developers/{developer}', [DeveloperController::class, 'show'])->name('developers.show');
Route::put('/developers/{developer}', [DeveloperController::class, 'update'])->name('developers.update');
Route::delete('/developers/{developer}', [DeveloperController::class, 'destroy'])->name('developers.destroy');

Route::get('/games', [GameController::class, 'index']); //GET http://127.0.0.1:8000/api/games
Route::post('/games', [GameController::class, 'store']); 
Route::get('/games/{game}', [GameController::class, 'show']);
Route::put('/games/{game}', [GameController::class, 'update']);
Route::delete('/games/{game}', [GameController::class, 'destroy']);