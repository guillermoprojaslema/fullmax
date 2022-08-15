<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactController;

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

Route::view('/', 'home')->name('home');
Route::view('/who-we-are', 'who-we-are')->name('who-we-are');
Route::view('/our-services', 'our-services')->name('our-services');

Route::get('/contact-us', [ContactController::class, 'create'])->name('contact-us.create');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact-us.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
