<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ClassMahasiswaController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::resource('/mahasiswa', MahasiswaController::class)->middleware('auth');
// Route::resource('/class', MahasiswaController::class)->middleware('auth')->except(['show', 'edit', 'update']);
Route::post('/class', [ClassMahasiswaController::class, 'store'])->middleware('auth');
// Route::group();

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration')->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store'])->middleware('guest');