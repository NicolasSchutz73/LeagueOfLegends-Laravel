<?php

use App\Http\Controllers\Home;
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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [Home::class, 'index'])->name('home.index');



Route::get('/champion/{name}', [App\Http\Controllers\Champion::class,'index'])->name('champion.index');

Route::get('/contact', [App\Http\Controllers\Contact::class, 'index'])->name('contactindex');

Route::post('/contact', [App\Http\Controllers\Contact::class, 'send'])->name('contactsend');

