<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [HomeController::class, "index"])->name("home");

Route::get('/user/list', [UserController::class, 'list'])->name('user.list');
Route::get('/user/details/{name}',[UserController::class,'home'])->name('user.details');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/create',[UserController::class,'createSubmit'])->name('user.create.submit');

Route::get('/about-us', [HomeController::class, "aboutUs"])->name("aboutus");
Route::get('/contact-us', [HomeController::class, "contactUs"])->name("contactus");
Route::get('/our-team', [TeamController::class, "ourTeam"])->name("ourteam");