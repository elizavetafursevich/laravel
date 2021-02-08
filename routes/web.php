<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


//Admin:

Route::view('/wp-admin','admin.admin');
Route::view('/login-a','admin.login');
Route::view('/tables','admin.tables');
Route::view('/charts','admin.charts');
Route::view('/401','admin.401');
Route::view('/404','admin.404');
Route::view('/500','admin.500');
Route::view('/layout-sidenav-light','admin.layout-sidenav-light');
Route::view('/layout-static','admin.layout-static');
Route::view('/register-a','admin.register');
Route::view('/password-a','admin.password');
