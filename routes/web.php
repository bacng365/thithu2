<?php

use App\Http\Controllers\MusicianController;
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

// Route::get('/', function () {
//     return view('musicians.index');
// });

Route::group(["prefix" => "musicians", "as" => "musicians."], function() {
    Route::get('/', [MusicianController::class, 'index'])->name('index');
    Route::get('/create', [MusicianController::class, 'create'])->name('create');
    Route::post('/', [MusicianController::class, 'store'])->name('store');
    Route::get('/{musician}/edit', [MusicianController::class, 'edit'])->name('edit');
    Route::put('/{musician}', [MusicianController::class, 'update'])->name('update');
    Route::delete('/{musician}', [MusicianController::class, 'destroy'])->name('destroy');
});
