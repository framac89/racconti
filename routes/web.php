<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/pagina1', [PublicController::class, 'pagina1'])->name('pagina1');
Route::get('/pagina2', [PublicController::class, 'pagina2'])->name('pagina2');