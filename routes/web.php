<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
//login
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/dashboard', [LoginController::class, 'login'])->name('login.login');
Route::get('/dashboard',[LoginController::class,'show'])->name('admin.dashboard');


Route::get('/', function () {
    return view('welcome');
});

//admin dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');


Route::get('/addProfile',[ProfileController::class,'index'])->name('profile.index');
Route::post('/addProfile/save',[ProfileController::class,'store'])->name('profile.store');
Route::get('/showProfile',[ProfileController::class,'show'])->name('profile.show');
Route::get('/show/{profile:id}/edit',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('/show/{profile:id}/update',[ProfileController::class,'update'])->name('profile.update');
Route::delete('/show/{profile:id}/delete',[ProfileController::class,'delete'])->name('profile.delete');
