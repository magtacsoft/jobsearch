<?php

use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('foremployers', [HomeController::class, 'forEmployers'])->name('forEmployers');
Route::get('forjobseekers', [HomeController::class, 'forjobseekers'])->name('forjobseekers');
Route::get('servicefee', [HomeController::class, 'servicefee'])->name('servicefee');
Route::get('hr', [HomeController::class, 'hr'])->name('hr');
Route::get('contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('vacancy/{id}/', [HomeController::class, 'readVacancy'])->name('read');

