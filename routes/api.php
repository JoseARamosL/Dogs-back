<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\HairController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/dogs', [DogController::class, 'dogs'])->name('dogs.list');
    Route::get('/dog/{id}', [DogController::class, 'getDogById'])->name('dogs.getDog');
    Route::post('/dog/create', [DogController::class, 'store'])->name('dogs.create');
    Route::delete('/dog/{id}', [DogController::class, 'destroy'])->name('dogs.destroy');
    Route::put('/dog/{id}', [DogController::class, 'update'])->name('dogs.update');

    Route::get('/races', [RaceController::class, 'index'])->name('races.list');

    Route::get('/sizes', [SizeController::class, 'index'])->name('sizes.list');

    Route::get('/hairs', [HairController::class, 'index'])->name('hairs.list');
});

