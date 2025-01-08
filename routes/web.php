<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\todosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('/create', [todosController::class, 'store'])->name('todo.create');
    Route::get('/create', [todosController::class, 'create'])->name('todo.add');
    Route::get('/edit/{id}', [todosController::class, 'edit'])->name('todo.edit');
    Route::put('/edit/{id}', [todosController::class, 'updateData'])->name('todo.update');
    Route::delete('/delete/{id}', [todosController::class, 'delete'])->name('todo.delete');
    Route::get('/', [todosController::class, 'index'])->name('todo.home');
});



require __DIR__.'/auth.php';
