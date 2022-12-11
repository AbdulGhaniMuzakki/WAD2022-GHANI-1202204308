<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowroomController;

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

Route::get('/', function () {
    $navbar = Cookie::get('navbar') ? Cookie::get('navbar') : 'primary';
    return view('index', [
        'navbar' => $navbar
    ]);
});
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/daftar', [AuthController::class, 'daftar']);
Route::post('/daftar', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::resource('/showroom', ShowroomController::class);
Route::get('/profile', [ProfileController::class, 'index']);
Route::patch('/profile/{user}', [ProfileController::class, 'update'])->middleware('auth');