<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\UserController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*
Additional route white designing process in progress
*/

// Route::get('/index', function() {
//     return view('index');
// })->name('home');

// Route::get('/dashboard/users', function() {
//     return view('users');
// })->middleware(['auth'])->name('users');

Route::resource('/dashboard/users', UserController::class);

Route::get('/dashboard/questionnaire', function() {
    return view('questionnaire');
})->middleware(['auth'])->name('questionnaire');

Route::get('/dashboard/survey', function() {
    return view('survey');
})->middleware(['auth'])->name('survey');

Route::get('/dashboard/posts', function() {
    return view('posts');
})->middleware(['auth'])->name('posts');
