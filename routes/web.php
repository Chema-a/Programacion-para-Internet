<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\RegistratorController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('teacher',TeacherController::class);
Route::resource('registrator',RegistratorController::class);

Route::resource('homework',HomeworkController::class);

Route::post('subject/{subject}/add-homework/',[SubjectController::class, 'addHomework'])->name('subject.addHomework');
Route::post('subject/{subject}/add-teacher/',[SubjectController::class, 'addTeacher'])->name('subject.addTeacher');
Route::resource('subject',SubjectController::class);