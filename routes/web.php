<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuBaruController;
use App\Http\Controllers\MenuUserController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu/{id}', [MenuUserController::class, 'menu'])->name('menu');
Route::get('/menu/buat/{id}', [MenuBaruController::class, 'MenuBaru'])->name('MenuBaru');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', [AdminController::class, 'index'])
        ->name('admin')
        ->middleware('auth')
        ;
        Route::resource('Toko', TokoController::class)
        ->middleware('auth');
        Route::resource('Menu', MenuController::class)
        ->middleware('auth');
    });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
