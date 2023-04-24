<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\PeopleController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/doctors', DoctorsController::class)->names('doctors');
Route::resource('/hospitals', HospitalsController::class)->names('hospitals');
Route::resource('/peoples', PeopleController::class)->names('peoples');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
