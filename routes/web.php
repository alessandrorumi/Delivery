<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DishController;

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


Route::get('/dishes/create', [DishController::class, 'create'])
    ->name('dishes.create');

Route::post('/dishes/create', [DishController::class, 'store'])
    ->name('dishes.store');

Route::get('/dishes/{id}/edit', [DishController::class, 'edit'])
    ->name('dishes.edit');

Route::put('/dishes/{id}/edit', [DishController::class, 'update'])
    ->name('dishes.update');

Route::delete('/dishes/{id}/destroy', [DishController::class, 'destroy'])
->name('dishes.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
