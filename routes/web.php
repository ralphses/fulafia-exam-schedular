<?php

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

// Example Routes
Route::view('/', 'home')->name('home');
Route::view('/register-student', 'student-register')->name('student.register');
Route::view('/register-school', 'school-register')->name('school.register');
Route::view('/login', 'login')->name('login');
Route::view('/forgot-password', 'forgot-password')->name('password.reset');
Route::view('/new-password', 'new-password')->name('password.new');

/*
|--------------------------------------------------------------------------
| School Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/school')->group(function () {

    Route::view('/', 'school-profile')
        ->name('school.profile');

    Route::prefix('course')->group(function () {

        Route::view('/','new-course')
            ->name('course.new');
    });
});

Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');
