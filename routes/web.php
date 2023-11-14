<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServiceController;
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




Route::get('/', [FrontController::class,'home'])->name('home');
Route::get('/about', [FrontController::class,'about'])->name('about');
Route::get('/services', [FrontController::class,'services'])->name('services');
Route::get('/staff', [FrontController::class,'staff'])->name('staff');
Route::get('/events', [FrontController::class,'events'])->name('events');
Route::get('/events/{slug}', [FrontController::class,'eventsingle'])->name('eventsingle');
Route::get('/contact', [FrontController::class,'contact'])->name('contact');


Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('admin.login.post');
Route::get('/logout', [AuthController::class,'logout'])->name('admin.logout');


Route::prefix('adminpanel')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/dashboard', function () { return view('admin.dashboard');})->name('dashboard');
    Route::get('/myprofile', function () { return view('admin.myprofile');})->name('myprofile');



    Route::resource('services', ServiceController::class);
    Route::get('/switch',[ServiceController::class, 'switch'])->name('switch');
});

