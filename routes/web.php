<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SinglePostController;

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

/*
|--------------------------------------------------------------------------
|HOME CONTROLLER
*/
Route::get('/', [HomeController::class, 'index']);


/*
|--------------------------------------------------------------------------
|ABOUT CONTROLLER
*/
Route::get('/about', [AboutController::class, 'index']);


/*
|--------------------------------------------------------------------------
|CONTACT CONTROLLER
*/
Route::get('/contact', [ContactController::class, 'index']);

/*
|--------------------------------------------------------------------------
|SINGLE POSST CONTROLLER
*/
// Route::get('/single_post', [SinglePostController::class, 'index']);

/*
|--------------------------------------------------------------------------
|CATEGORIE POSST CONTROLLER
*/
Route::get('/categories', [CategoriesController::class, 'index']);

/*
|--------------------------------------------------------------------------
|REGISTER POSST CONTROLLER
*/
Route::get('/register', [RegisterController::class, 'index']);

/*
|--------------------------------------------------------------------------
|LOGIN POSST CONTROLLER
*/
Route::get('/login', [LoginController::class, 'index']);