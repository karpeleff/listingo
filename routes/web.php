<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return view('welcome');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mainpage', [App\Http\Controllers\HomeController::class, 'mainPage'])->name('mainpage');
Route::get('/addnote', [App\Http\Controllers\HomeController::class, 'addNote'])->name('addnote');
Route::post('/additem', [App\Http\Controllers\HomeController::class, 'addItem'])->name('additem');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::post('/search', [App\Http\Controllers\Customer::class, 'search'])->name('search');
Route::get('/storeview', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/del/{id}', [App\Http\Controllers\HomeController::class, 'del'])->name('del');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
