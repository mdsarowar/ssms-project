<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\PageViewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;

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

Route::get('/',[PageViewController::class,'home'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home.home');
})->name('dashboard');

Route::get('/create_user',[UserController::class,'createUser'])->name('create_user');
Route::get('/manage_user',[UserController::class,'manageUser'])->name('manage_user');
Route::post('/new_user',[UserController::class,'newUser'])->name('new_user');
Route::get('/user_edit/{id}',[UserController::class,'editUser'])->name('user_edit');
Route::post('/update_user/{id}',[UserController::class,'updateUser'])->name('update_user');
Route::get('/user_delete/{id}',[UserController::class,'deleteUser'])->name('user_delete');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::middleware('is_admin')->get('/create_role',[RoleController::class,'createRole'])->name('create_role');
    Route::middleware('is_admin')->post('/new_role',[RoleController::class,'newRole'])->name('new_role');
    Route::middleware('is_admin')->get('/manage_role',[RoleController::class,'manageRole'])->name('manage_role');

    Route::get('/create_teacher',[TeacherController::class,'createTeacher'])->name('create_teacher');
    Route::get('/manage_teacher',[TeacherController::class,'manageTeacher'])->name('manage_teacher');
    Route::post('/new_teacher',[TeacherController::class,'newTeacher'])->name('new_teacher');
    Route::get('/teacher_edit/{id}',[TeacherController::class,'teacherEdit'])->name('teacher_edit');
    Route::post('/update_teacher/{id}',[TeacherController::class,'updateTeacher'])->name('update_teacher');
    Route::get('/teacher_delete/{id}',[TeacherController::class,'teacherDelete'])->name('teacher_delete');
    Route::get('/change_teacher_status/{id}',[TeacherController::class,'changeTeacherStatus'])->name('change_teacher_status');
});
//student module

Route::get('/manage_student_info',[StudentController::class,'manageStudent'])->name('manage_student_info');
Route::get('/create_student_info',[StudentController::class,'createStudent'])->name('create_student_info');
Route::post('/new_student_info',[StudentController::class,'newStudent'])->name('new_student_info');
Route::get('/edit_student_info/{id}',[StudentController::class,'editStudent'])->name('edit_student_info');
Route::post('/update_student_info/{id}',[StudentController::class,'updateStudent'])->name('update_student_info');
Route::post('/delete_student_info/{id}',[StudentController::class,'deleteStudent'])->name('delete_student_info');
Route::post('/change_student_status/{id}',[StudentController::class,'changeStudentstatus'])->name('change_student_status');

//subject module

Route::get('/create_subject',[SubjectController::class,'createSubject'])->name('create_subject');
Route::get('/manage_subject',[SubjectController::class,'manageSubject'])->name('manage_subject');
Route::post('/new_subject',[SubjectController::class,'newSubject'])->name('new_subject');
Route::get('/subject_edit/{id}',[SubjectController::class,'subjectEdit'])->name('subject_edit');
Route::post('/subject_update/{id}',[SubjectController::class,'updateSubject'])->name('update_subject');
Route::get('/subject_delete/{id}',[SubjectController::class,'subjectDelete'])->name('subject_delete');
Route::get('/change_subject_status/{id}',[SubjectController::class,'changeSubjectStatus'])->name('change_subject_status');

