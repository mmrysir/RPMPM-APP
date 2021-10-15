<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\auth\LoginController;
use App\Http\Controller\auth\RegisterController;
use App\Http\Controller\DashboardController;
use App\Http\Controller\EmployeeController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'Login'])->middleware('alreadyLoggedIn');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'Register'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [App\Http\Controllers\Auth\RegisterController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [App\Http\Controllers\Auth\LoginController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [App\Http\Controllers\Auth\LoginController::class, 'dashboard'])->middleware('IsloggedIn');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::get('/time', [App\Http\Controllers\EmployeeController::class, 'timesheet']);
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'employee']);
Route::get('/addEmployee', [App\Http\Controllers\EmployeeController::class, 'add']);
Route::post('/add-employee', [App\Http\Controllers\EmployeeController::class, 'addemployee'])->name('add-employee');
Route::get('/activitylog', [App\Http\Controllers\Auth\LoginController::class, 'activelogin'])->name('login-in');
Route::get('/activitylogg', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('login-out');




