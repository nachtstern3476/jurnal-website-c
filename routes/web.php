<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/jurnal', [MainController::class, 'jurnal'])->name('jurnal.list');
Route::get('/jurnal/detail/{id}', [MainController::class, 'detail'])->name('jurnal.detail');
Route::get('/jurnal/add', [MainController::class, 'form'])->name('jurnal.form');
Route::post('/jurnal/add', [MainController::class, 'create_jurnal'])->name('jurnal.form');
Route::get('/download/{id}', [MainController::class, 'download'])->name('download.attachment');

Route::get('/login', function () {
    return view('auth/login');
})->middleware('isLogin')->name('login');
Route::get('/register', function () {
    return view('auth/register');
})->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
