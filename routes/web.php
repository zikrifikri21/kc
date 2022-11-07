<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/class', [HomeController::class, 'class']);

Route::get('/class/{kelas:slug}', [HomeController::class, 'keterangan']);

Route::get('/auth', function () {
    return view('/auth/login');
});
Route::get('/register', function () {
    return view('/auth/register');
});
