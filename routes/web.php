<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\RegistratorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StorageController;
use Illuminate\Http\Request;
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

Route::get('protected', ['middleware' => ['auth', 'student'], function() {
    return "/student";
}]);
Route::get('protected', ['middleware' => ['auth', 'teacher'], function() {
    return "/teacher";
}]);
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "/login";
}]);

Route::resource('teacher',TeacherController::class);
Route::resource('registrator',RegistratorController::class)->middleware('admin');


Route::resource('homework',HomeworkController::class);//-> middleware('auth');

Route::get('student/view-subject/',[StudentController::class, 'viewSubject'])->name('student.viewSubject');
Route::resource('student',StudentController::class);//-> middleware('auth');
Route::post('subject/add-student',[SubjectController::class, 'addStudent'])->name('subject.addStudent');

Route::resource('formulario',StorageController::class);//-> middleware('auth');




Route::resource('subject',SubjectController::class);
Route::post('subject/{subject}/add-homework/',[SubjectController::class, 'addHomework'])->name('subject.addHomework');
Route::post('subject/{subject}/add-teacher/',[SubjectController::class, 'addTeacher'])->name('subject.addTeacher');
Route::get('subject/{subject}/{homework}/', [HomeworkController::class, 'show'])->name('homework.show');
Route::get('subject/{subject}/{homework}/edit-homework/',[HomeworkController::class, 'edit'])->name('homework.edit');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::get('/email/verify', function(){
    return view('auth.verify-email');
}) -> middleware('auth')-> name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();
    return redirect('/');
})-> middleware(['auth', 'signed']) ->name ('verification.verify');  

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');