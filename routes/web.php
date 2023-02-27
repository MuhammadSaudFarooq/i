<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
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
//     return view('welcome');
// });

// Home route
Route::get('/', [MainController::class, 'index']);

// Inner pages routes
Route::get('shop', [MainController::class, 'shop']);
Route::get('single-product', [MainController::class, 'single_product']);
Route::get('cart', [MainController::class, 'cart']);
Route::get('checkout', [MainController::class, 'checkout']);
Route::get('contact', [MainController::class, 'contact']);
Route::get('category', [MainController::class, 'category']);
Route::get('wishlist', [MainController::class, 'wishlist']);

// Auth routes
// Single middleware
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');

// Group middleware
Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', [MainController::class, 'dashboard']);
    Route::get('/orders', [UserController::class, 'orders']);
    Route::get('/address', [UserController::class, 'address']);
    Route::post('/address', [UserController::class, 'user_options']);
    Route::get('/account-detail', [UserController::class, 'account_detail']);
    Route::post('/account-detail', [UserController::class, 'user_name']);
    Route::post('/account-detail', [UserController::class, 'update_password']);
});

// Guest routes
Route::group(['middleware' => 'guest'], function() {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'loginUser']);
    Route::get('register', [LoginController::class, 'register'])->name('register');
    Route::post('register', [LoginController::class, 'createUser']);
});