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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/members', [App\Http\Controllers\HomeController::class, 'members'])->name('members');
Route::get('/social', [App\Http\Controllers\HomeController::class, 'social'])->name('social');
Route::post('/submit-posts', [App\Http\Controllers\HomeController::class, 'submitPosts'])->name('submitPosts');



Route::get('/events', [App\Http\Controllers\EventController::class, 'events'])->name('events');
Route::get('/create-event', [App\Http\Controllers\EventController::class, 'createEvent'])->name('createEvent');
Route::post('/submit-event', [App\Http\Controllers\EventController::class, 'submitEvent'])->name('submitEvent');
Route::get('/events-detail/{id}', [App\Http\Controllers\EventController::class, 'eventsDetail'])->name('eventsDetail');
Route::get('/event-filter', [App\Http\Controllers\EventController::class, 'eventFilter'])->name('eventFilter');



Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/submit-profile', [App\Http\Controllers\ProfileController::class, 'submitProfile'])->name('submitProfile');