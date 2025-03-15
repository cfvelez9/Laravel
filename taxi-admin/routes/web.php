<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route('data.index'));

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('data', DataController::class)->only(['index','show']);
Route::middleware('auth')->group(function(){
    Route::resource('data.register', DataController::class)->only(['create','store']);
});

Route::resource('auth', AuthController::class)->only(['create','store']);
Route::delete('logout', fn()=> to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');
