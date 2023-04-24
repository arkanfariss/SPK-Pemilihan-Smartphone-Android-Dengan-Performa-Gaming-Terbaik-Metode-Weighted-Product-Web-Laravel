<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardDataController;
use App\Http\Controllers\HitungController;

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
    return redirect('/home');
});

Route::get('/home', [HitungController::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT"
    ]);
});
Route::get('/admin', [AdminController::class, 'index'])->name('login')->middleware('guest');

Route::post('/admin', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::any('/result', [HitungController::class, 'proses']);
Route::post('/clear', [HitungController::class, 'clear']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::resource('/dashboard/data', DashboardDataController::class)->middleware('auth');
