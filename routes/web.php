<?php

use App\Http\Controllers\Web\HomeController;
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
// Language
Route::get('/language/{locale}', [HomeController::class, 'changeLanguage'])->name('change_language');
// Main links
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/team/{member_id}', [HomeController::class, 'teamMember'])->whereNumber('member_id')->name('team.member');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/realization', [HomeController::class, 'realization'])->name('realization');
