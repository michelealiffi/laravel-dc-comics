<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::resource('comics', ComicController::class);
Route::get('/comics', [ComicController::class, 'index'])->name('index');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');


Route::get('/', function () {
    return redirect()->route('index');
});
