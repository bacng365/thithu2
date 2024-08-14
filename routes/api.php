<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MusicianController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(["prefix" => "musicians", "as" => "musicians."], function() {
    Route::get('/', [MusicianController::class, 'index'])->name('index');
    Route::post('/', [MusicianController::class, 'store'])->name('store');
    Route::put('/{musician}', [MusicianController::class, 'update'])->name('update');
    Route::delete('/{musician}', [MusicianController::class, 'destroy'])->name('destroy');
});
