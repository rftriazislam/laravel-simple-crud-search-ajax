<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/save-register', [AuthController::class, 'save_register'])->name('save_register');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/user-login', [AuthController::class, 'login_user'])->name('login_user');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/employee', [HomeController::class, 'employee'])->name('employee');
Route::get('/search', [HomeController::class, 'search'])->name('search');


Route::post('/employee-store', [HomeController::class, 'save_employee'])->name('save_employee');

Route::get('/employee-list', [HomeController::class, 'employee_list'])->name('employee_list');

Route::get('/employee-remove/{id}', [HomeController::class, 'remove'])->name('remove');


Route::get('/employee-load', [HomeController::class, 'load_data'])->name('load_data');


Route::get('/del-data-load', [HomeController::class, 'del_data'])->name('del_data');






