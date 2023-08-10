<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/data', [ApiController::class, 'index']);
    Route::post('/data', [ApiController::class, 'store']);
    Route::post('/data/{id}', [ApiController::class, 'update']);
    Route::delete('/data/{id}', [ApiController::class, 'destroy']);
    Route::get('/data/{id}', [ApiController::class, 'show']);
    Route::get('/logout', [ApiController::class, 'logout']);
});

Route::post('/login', [ApiController::class, 'login']);

// Route::get('/data', [ApiController::class, 'index'])->middleware(['auth:sanctum']);
// Route::get('/data/{id}', [ApiController::class, 'show'])->middleware(['auth:sanctum']);
// Route::get('/logout', [ApiController::class, 'logout'])->middleware(['auth:sanctum']);