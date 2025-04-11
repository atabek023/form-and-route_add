<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;



Route::get('/form', [PostController::class, 'index'])->name('form.index');
Route::post('/form', [PostController::class, 'store'])->name('form.store');
Route::delete('/form', [PostController::class, 'delete'])->name('form.delete');
Route::put('/form', [PostController::class, 'update'])->name('form.update');
Route::patch('/form', [PostController::class, 'patch'])->name('form.patch');
