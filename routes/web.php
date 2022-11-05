<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [KelasController::class, 'index']);

Route::get('/class', [KelasController::class, 'class']);

Route::get('/auth', function () {
    return view('/auth/login');
});
Route::get('/register', function () {
    return view('/auth/register');
});
