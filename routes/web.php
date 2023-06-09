<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StudentController;
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

 
Route::get('/', [StudentController::class, 'index'])->name('students');
Route::get('standards', [StudentController::class, 'getStandard'])->name('standards');
Route::get('results', [StudentController::class, 'getResult'])->name('results');
Route::get('students/records', [StudentController::class, 'records'])->name('students/records');