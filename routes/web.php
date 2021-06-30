<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\RegistratorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StorageController;
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
    return view('inicio');
});
Route::get('inicio', function(){
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group([
    'middleware' => 'App\Http\Middleware\TeacherMiddleware',
    'prefix' => 'teacher',
    'namespace' => 'Teacher'
], function () {
    Route::get('/registrator', 'RegistratorController@index');
    Route::get('/teacher', 'TeacherController@index');
});

Route::resource('teacher',TeacherController::class);
Route::resource('registrator',RegistratorController::class);

Route::resource('homework',HomeworkController::class);

Route::get('student/view-subject/',[StudentController::class, 'viewSubject'])->name('student.viewSubject');
Route::resource('student',StudentController::class);
Route::post('subject/add-student',[SubjectController::class, 'addStudent'])->name('subject.addStudent');

Route::resource('formulario',StorageController::class);




Route::resource('subject',SubjectController::class);
Route::post('subject/{subject}/add-homework/',[SubjectController::class, 'addHomework'])->name('subject.addHomework');
Route::post('subject/{subject}/add-teacher/',[SubjectController::class, 'addTeacher'])->name('subject.addTeacher');
Route::get('subject/{subject}/{homework}/', [HomeworkController::class, 'show'])->name('homework.show');
Route::get('subject/{subject}/{homework}/edit-homework/',[HomeworkController::class, 'edit'])->name('homework.edit');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');