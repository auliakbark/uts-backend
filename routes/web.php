<?php

use App\Http\Controllers\Admin18Controller;
use App\Http\Controllers\Agama18Controller;
use App\Http\Controllers\Auth\Login18Controller;
use App\Http\Controllers\Auth\Register18Controller;
use App\Http\Controllers\DetailData18Controller;
use App\Http\Controllers\User18Controller;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return redirect('/admin18');
});
Route::get('/login18', [Login18Controller::class, 'showLoginForm'])->name('login');
Route::post('/login18', [Login18Controller::class, 'login']);
Route::get('/register18', [Register18Controller::class, 'showRegistrationForm'])->name('register');
Route::post('/register18', [Register18Controller::class, 'register']);
Route::get('/logout18', [Login18Controller::class, 'logout'])->name('logout');

Auth::routes(['login' => false, 'register' => false]);
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/admin18', function () {
        return redirect('/admin18/dashboard18');
    });
    Route::get('/admin18/dashboard18', [Admin18Controller::class, 'index18']);
    Route::post('/admin18/dashboard18/update-foto-profil18', [Admin18Controller::class, 'update_foto18']);
    Route::get('/admin18/approve18/{id}', [User18Controller::class, 'approve18']);
    Route::get('/admin18/data-agama18', [Agama18Controller::class, 'index18']);
    Route::post('/admin18/data-agama18/create18', [Agama18Controller::class, 'create18']);
    Route::get('/admin18/data-agama18/edit18/{id}', [Agama18Controller::class, 'edit18']);
    Route::post('/admin18/data-agama18/update18', [Agama18Controller::class, 'update18']);
    Route::get('/admin18/data-agama18/delete18/{id}', [Agama18Controller::class, 'delete18']);
    Route::get('/admin18/dashboard18/detail18/{id}', [DetailData18Controller::class, 'index18']);
});
Route::middleware('auth', 'isUser')->group(function () {
    Route::get('/dashboard18', [User18Controller::class, 'index18'])->name('home');
    Route::get('/dashboard18/edit-data18', [User18Controller::class, 'edit18']);
    Route::get('/dashboard18/ganti-password18', [User18Controller::class, 'gantipass18']);
    Route::post('/dashboard18/update-password18', [User18Controller::class, 'updatepass18']);
    Route::post('/dashboard18/update-data18', [User18Controller::class, 'update18']);
    Route::post('/dashboard18/update-foto-profil18', [Admin18Controller::class, 'update_foto18']);
});