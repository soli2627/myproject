<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
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
//     return view('welcome');
// });
Route::get('/', [RestaurantController::class, 'index']);
Route::get('/list', [RestaurantController::class, 'list'])->name('restu.list');
Route::get('/about', [RestaurantController::class, 'about'])->name('restu.about');
Route::get('/create-resturant', [RestaurantController::class, 'add'])->name('restu.create');
Route::post('/restu-store', [RestaurantController::class, 'store'])->name('restu.store');
Route::get('/search', [RestaurantController::class, 'search'])->name('restu.search'); 
Route::get('/delete/{id}', [RestaurantController::class, 'destory'])->name('restu.delete');
Route::get('/edit/{id}', [RestaurantController::class, 'edit'])->name('restu.edit');
Route::post('/update', [RestaurantController::class, 'update'])->name('restu.update');

//User Route
Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/user-login',[UserController::class, 'userlogin'])->name('users.user-login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard');
Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::post('/store', [UserController::class, 'store'])->name('users.store');
Route::get('/logout',[UserController::class, 'logout'])->name('users.logout');