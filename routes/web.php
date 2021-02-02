<?php

use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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

Route::get('/', [PortofolioController::class, 'index'])->name('index');
Route::get('/dashboards', [ProfileController::class, 'dashboard'])->name('dashboard');

Route::get('/portofolios', [PortofolioController::class, 'portofolio'])->name('portofolio');

Route::get('/contact', [PortofolioController::class, 'contact'])->name('contact');
Route::post('/contactPost', [PortofolioController::class, 'contactPost'])->name('contactPost');

Route::resource('profiles', ProfileController::class);
Route::resource('projects', ProjectController::class);
Route::resource('experiences', ExperienceController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




