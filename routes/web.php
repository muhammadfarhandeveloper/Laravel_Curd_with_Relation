<?php

use App\Http\Controllers\TeacherController;
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

Route::get('/', [TeacherController::class , 'index']);
Route::post('/store', [TeacherController::class , 'store']);
Route::get('/info', [TeacherController::class , 'info']);
Route::get('/delete/{id}', [TeacherController::class , 'delete']);


