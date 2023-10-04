<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DigiController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TableCountController;
use App\Http\Controllers\UserController;
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

//Home page
Route::get('/', [DigiController::class, 'index']);

//Access contact page
Route::get('/contact', [DigiController::class, 'contact']);

//Access about us page
Route::get('/about-us', [DigiController::class, 'aboutUs']);

//Access services
Route::get('/section', [DigiController::class, 'services']);

//Create subscription
Route::post('/subscription', [SubscriptionController::class, 'subscribe']);

//Send messages
Route::post('/contacts', [ContactController::class, 'contact']);

//Show admin login form
Route::get('/login', [UserController::class, 'login'])->name('login');

//Authenticate admin
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Show admin page
Route::get('/admin', [ContactController::class, 'admin'])->middleware('auth');

//Count messages
Route::get('/admin', [TableCountController::class, 'countRows']);

//Show messages
Route::get('/admin/message', [ContactController::class, 'message']);

//Show subscriptions
Route::get('/admin/subscription', [SubscriptionController::class, 'subscription']);

//Delete message
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);

//logout admin
Route::post('/logout', [UserController::class, 'logout']);