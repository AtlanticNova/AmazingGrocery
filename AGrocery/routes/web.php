<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OrderController;
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


// Home
Route::get('/', [HomeController::class, 'viewHome']);

// Register
Route::get('/register', [AccountController::class, 'viewRegister']);
Route::get('/login', [AccountController::class, 'viewLogin']);
Route::post('/register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [AccountController::class, 'logout']);
    Route::get('/cart', [OrderController::class, 'viewCart']);
    Route::get('/cart/add/{id}', [OrderController::class, 'add']);
    Route::get('/cart/delete/{id}', [OrderController::class, 'remove']);
    Route::get('/checkout', [OrderController::class, 'add']);
    Route::get('/profile', [AccountController::class, 'viewProfile']);
    Route::post('/profile', [AccountController::class, 'editProfile']);
});

// Localization
Route::get('lang/', [LanguageController::class, 'index']);
Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');

Route::get('/details/{id}', [ItemController::class,'detailsItem']);

