<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FizzbuzzController;
use App\Http\Controllers\PalindromeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fizzbuzz', [FizzbuzzController::class, 'index']);
Route::get('/palindrome', [PalindromeController::class, 'index']);
Route::resource('/test', \App\Http\Controllers\TestController::class);
