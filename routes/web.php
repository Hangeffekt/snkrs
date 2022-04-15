<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WtsController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [WtsController::class, "main"]);

Route::get('/login', [WtsController::class, "login"]);

Route::get('/registration', [WtsController::class, "register"]);

Route::get('/news', function () {
    return view('news');
});

Route::get('/wts', [WtsController::class, "index"]);

Route::get('/wtb', [WtsController::class, "index"]);

Route::get('/wtt', [WtsController::class, "index"]);

Route::get('/add', function () {
    return view('newproduct');
});

/** profile pages */
Route::get('/profile', [ProfileController::class, "index"])->middleware('auth');

Route::get("/add", [WtsController::class, "create"]);
Route::post("/wtsstore", [WtsController::class, "store"])->name("user.wtsstore");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
