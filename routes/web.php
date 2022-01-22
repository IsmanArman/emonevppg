<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\SurveyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Models\Dashboard;
use App\Models\Question;
use PHPUnit\TextUI\XmlConfiguration\Group;

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



// Route::resource('/dashboard', DashboardController::class);
Route::resource('/dashboard/users', UserController::class);
Route::resource('/dashboard/questionnaire', QuestionnaireController::class);
Route::resource('/dashboard/questionnaire/{questionnaire}/questions', Question::class);
Route::resource('/dashboard/surveys', SurveyController::class);
Route::resource('/dashboard/posts', PostController::class);


// Route::get('/dashboard/questionnaire', function() {
//     return view('questionnaire');
// })->middleware(['auth'])->name('questionnaire');

// Route::get('/dashboard/survey', function() {
//     return view('survey');
// })->middleware(['auth'])->name('survey');

// Route::get('/dashboard/posts', function() {
//     return view('posts');
// })->middleware(['auth'])->name('posts');
