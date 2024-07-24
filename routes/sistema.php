<?php

use App\Http\Controllers\Web\ArtController;
use App\Http\Controllers\Web\VistoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('arts.index');
});


Route::get('art', [ArtController::class, 'index'])->name('arts.index');
Route::get('art/new', [ArtController::class, 'create'])->name('arts.create');
Route::post('art/new', [ArtController::class, 'store'])->name('arts.store');
Route::get('art/{id}', [ArtController::class, 'show'])->name('arts.show');
Route::get('art/{id}/edit', [ArtController::class, 'edit'])->name('arts.edit');
Route::post('art/{id}/edit', [ArtController::class, 'update'])->name('arts.update');
Route::get('art/{id}/delete', [ArtController::class, 'destroy'])->name('arts.destroy');


Route::get('visto', [VistoController::class, 'index'])->name('vistos.index');
Route::get('visto/solicitar', [VistoController::class, 'create'])->name('vistos.create');
Route::post('art/solicitar', [VistoController::class, 'store'])->name('vistos.store');
Route::get('visto/{id}', [VistoController::class, 'show'])->name('vistos.show');
Route::get('visto/{id}/edit', [VistoController::class, 'edit'])->name('vistos.edit');
Route::post('art/{id}/edit', [VistoController::class, 'update'])->name('vistos.update');
Route::get('visto/{id}/delete', [VistoController::class, 'destroy'])->name('vistos.destroy');


