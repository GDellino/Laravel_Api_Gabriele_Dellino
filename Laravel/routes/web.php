<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/equipment/{index}',[PublicController::class , 'detail'])->name('detail');
