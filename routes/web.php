<?php

namespace App\Http\Controllers;

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

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/login', function () {
    return view('adminlogin');
});

Route::get('/information', function () {
    return view('information');
});

Route::post('/login', [UserController::Class, 'StudentRegister']);

Route::post('/information', [UserController::Class, 'StudentLogin']);

Route::post('/admin/student-management', [UserController::Class, 'AdminLogin']);

Route::get('/admin/edit/{lrn}', [UserController::Class, 'EditStudent']);

Route::post('/admin/update/', [UserController::Class, 'UpdateStudent']);

Route::get('/logout', [UserController::Class, 'StudentLogout']);

// Route::get('/admin/register', [UserController::Class, 'AdminRegistration']);
