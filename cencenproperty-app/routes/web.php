<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardPostController;


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

// DEFAULT
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'view'])->middleware('auth');
Route::get('/home', [DashboardController::class, 'view'])->middleware('auth');
Route::get('/dashboard/posts/rent', [DashboardController::class, 'rent'])->middleware('auth');
Route::get('/dashboard/posts/sell', [DashboardController::class, 'sell'])->middleware('auth');
Route::get('/dashboard/posts/search', [DashboardController::class, 'search'])->middleware('auth');
Route::get('/dashboard2', [DashboardController::class, 'view2'])->middleware('auth');
// Route::get('/edit', [DashboardController::class, 'edit'])->middleware('auth');

Route::Resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/LandingPage', [LandingPageController::class, 'view']);
Route::get('/page', [LandingPageController::class, 'page']);
Route::get('/category', [LandingPageController::class, 'category']);
Route::get('/tes', [LandingPageController::class, 'tes']);
Route::get('/terbaru', [LandingPageController::class, 'terbaru']);