<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

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
    return view('home');
});

Route::view('/about', 'about');

Route::get('/employee',[EmployeeController::class,'index'])->name('employee');
Route::get('/employee/create',[EmployeeController::class,'createdEmployee'])->name('createdEmployee');

Route::get('/students',[StudentController::class,'index'])->name('student');
Route::resource('students', StudentController::class);