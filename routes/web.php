<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/admin',function (){
//    return view('admin.dashbroad');
//})->middleware(\App\Http\Middleware\CheckAdminMiddleware::class);

//Auth::routes();
Route::get('auth/login', [\App\Http\Controllers\Auth\LoginController::class, 'showFormLogin'])->name('login');
Route::post('auth/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('auth/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('auth/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showFormRegister'])->name('register');
Route::post('auth/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

