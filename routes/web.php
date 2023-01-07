<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;

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



Route::resource('/places', PlaceController::class);

// wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->middleware('user');
Route::post('/wishlist',[WishlistController::class,'store'])->middleware('user');
Route::delete('/wishlist/{id}',[WishlistController::class,'destroy'])->middleware('user');


// register
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

// login
Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

// profile
Route::get('/profile/{user:id}/edit',[ProfileController::class,'edit'])->middleware('auth');
Route::put('/profile/{id}',[ProfileController::class,'update'])->middleware('auth');

// miscs
Route::view('/about', 'miscs.about');
Route::view('/policy', 'miscs.policy_and_privacy');
Route::view('/terms', 'miscs.terms_and_condition');