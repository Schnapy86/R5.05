<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\LoginController;

//Route::get('/',[ExampleController::class,'list']);

//Route::get('/',ExampleController::class)->middleware('auth');

Route::get('/login',[LoginController::class,'log'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');


Route::get('/',function(){
    return view('app.home');
})->middleware('auth');

Route::post('/logout',[LoginController::class,'logout'])->name('logout')->middleware('auth');
