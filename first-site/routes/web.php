<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

/*
*view can be used when only to show the view of 
the webpage as it is like frontend, 
no backend reqd.
*/
// Route::view('/', 'index')->name('index');
// Route::view('/home', 'home')->name('home');
// Route::view('/service', 'service')->name('service');
// Route::view('/portfolio', 'portfolio')->name('portfolio');
// Route::view('/prices', 'prices')->name('prices');
// Route::view('/contact', 'contact')->name('contact');
// Route::view('/opportunity', 'opportunity')->name('opportunity');
// Route::view('/honourableMentions', 'honourableMentions')->name('honourableMentions');
// Route::view('/motive', 'motive')->name('motive');
// Route::view('/read', 'read')->name('read');

/**
 * We can always rely on the 
 * normal way of MVC, here only VC 
 * because, controller methods and views 
 * are involved.
 */

 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/prices', [App\Http\Controllers\HomeController::class, 'prices'])->name('prices');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'index'])->name('contact');
Route::get('/opportunity', [App\Http\Controllers\HomeController::class, 'opportunity'])->name('opportunity');
Route::get('/honourableMentions', [App\Http\Controllers\HomeController::class, 'honourableMentions'])->name('honourableMentions');
Route::get('/motive', [App\Http\Controllers\HomeController::class, 'motive'])->name('motive');
Route::get('/read', [App\Http\Controllers\HomeController::class, 'read'])->name('read');
