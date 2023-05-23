<?php

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




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/signin', [App\Http\Controllers\HomeController::class, 'loginpage'])->name('signinpage');
Route::post('/signin', [App\Http\Controllers\HomeController::class, 'login'])->name('signin');
Route::get('/dashbord', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/attendance', [App\Http\Controllers\HomeController::class, 'attendance'])->name('attendance');
Route::get('/signuppage', [App\Http\Controllers\HomeController::class, 'signuppage'])->name('signuppage');
Route::get('/myhome', [App\Http\Controllers\HomeController::class, 'myhome'])->name('myhome');
Route::get('/courses', [App\Http\Controllers\HomeController::class, 'courses'])->name('courses');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/breifabout', [App\Http\Controllers\HomeController::class, 'breifabout'])->name('breifabout');
Route::get('/doctorhome', [App\Http\Controllers\HomeController::class, 'doctor'])->name('doctorhome');
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::get('/contactlogin', [App\Http\Controllers\HomeController::class, 'contactlogin'])->name('contactlogin');
Route::get('/course1', [App\Http\Controllers\HomeController::class, 'course1'])->name('course1');



