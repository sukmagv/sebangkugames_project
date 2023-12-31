<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register-success', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-success', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/add', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::get('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
Route::put('/approve/{user}', [UserController::class, 'approve'])->name('approve');
