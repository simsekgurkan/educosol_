<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('admin.login.post');
Route::get('/logout', [AuthController::class,'logout'])->name('admin.logout');


Route::prefix('')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/dashboard', function () { return view('admin.dashboard');})->name('dashboard');
});