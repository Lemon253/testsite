<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
//認証ミドルウェア
use App\Http\Controllers\AuthController;

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

Route::get('/', [ItemController::class, 'index']);
//Route::get('/', [AuthController::class, 'index']);
//認証ミドルウェア
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'buy']);
    Route::get('/', [AuthController::class, 'sell']);
});
