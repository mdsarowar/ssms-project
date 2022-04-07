<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\PageViewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Front\EnrollController;

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
Route::get('/subject_details/{id}',[PageViewController::class,'subjectDetails'])->name('subject_details');
Route::get('/enroll/{id}',[PageViewController::class,'enrollSubject'])->name('enroll');
Route::get('/user-login',[PageViewController::class,'userLogin'])->name('user-login');
Route::get('/user-register',[PageViewController::class,'userRegister'])->name('user-register');
Route::post('/user-login',[PageViewController::class,'userPostLogin'])->name('user-login');
Route::post('/user-register',[PageViewController::class,'userPostRegister'])->name('user-register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home.home');
})->name('dashboard');
Route::middleware('is_admin')->group(function (){
    Route::get('/create_user',[UserController::class,'createUser'])->name('create_user');
    Route::get('/manage_user',[UserController::class,'manageUser'])->name('manage_user');
    Route::post('/new_user',[UserController::class,'newUser'])->name('new_user');
    Route::get('/user_edit/{id}',[UserController::class,'editUser'])->name('user_edit');
    Route::post('/update_user/{id}',[UserController::class,'updateUser'])->name('update_user');
    Route::get('/user_delete/{id}',[UserController::class,'deleteUser'])->name('user_delete');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::middleware('is_admin')->get('/create_role',[RoleController::class,'createRole'])->name('create_role');
    Route::middleware('is_admin')->post('/new_role',[RoleController::class,'newRole'])->name('new_role');
    Route::middleware('is_admin')->get('/manage_role',[RoleController::class,'manageRole'])->name('manage_role');
    Route::middleware('is_admin')->get('/manage_enroll',[EnrollController::class,'manageEnroll'])->name('manage_enroll');
    Route::middleware('is_admin')->get('/edit_enroll_status/{id}',[EnrollController::class,'editEnrollStatus'])->name('edit_enroll_status');
    Route::middleware('is_admin')->get('/delete_enroll/{id}',[EnrollController::class,'deleteEnroll'])->name('delete_enroll');
    Route::middleware('is_admin')->post('/update_enroll/{id}',[EnrollController::class,'updateEnroll'])->name('update_enroll');

    Route::middleware('is_teacher')->get('/create_teacher',[TeacherController::class,'createTeacher'])->name('create_teacher');
    Route::middleware('is_admin')->get('/manage_teacher',[TeacherController::class,'manageTeacher'])->name('manage_teacher');
    Route::middleware('is_teacher')->post('/new_teacher/{id?}',[TeacherController::class,'newTeacher'])->name('new_teacher');
    Route::middleware('is_admin')->get('/teacher_edit/{id}',[TeacherController::class,'teacherEdit'])->name('teacher_edit');
    Route::middleware('is_admin')->post('/update_teacher/{id}',[TeacherController::class,'updateTeacher'])->name('update_teacher');
    Route::middleware('is_admin')->get('/teacher_delete/{id}',[TeacherController::class,'teacherDelete'])->name('teacher_delete');
    Route::middleware('is_admin')->get('/change_teacher_status/{id}',[TeacherController::class,'changeTeacherStatus'])->name('change_teacher_status');
});
//student module

Route::middleware('is_admin')->get('/manage_student_info',[StudentController::class,'manageStudent'])->name('manage_student_info');
Route::middleware('is_student')->get('/create_student_info',[StudentController::class,'createStudent'])->name('create_student_info');
Route::middleware('is_student')->post('/new_student_info',[StudentController::class,'newStudent'])->name('new_student_info');
Route::middleware('is_student')->get('/edit_student_info/{id}',[StudentController::class,'editStudent'])->name('edit_student_info');
Route::middleware('is_student')->post('/update_student_info/{id}',[StudentController::class,'updateStudent'])->name('update_student_info');
Route::middleware('is_student')->post('/delete_student_info/{id}',[StudentController::class,'deleteStudent'])->name('delete_student_info');
Route::middleware('is_student')->post('/change_student_status/{id}',[StudentController::class,'changeStudentstatus'])->name('change_student_status');

//subject module

Route::middleware('is_teacher')->get('/create_subject',[SubjectController::class,'createSubject'])->name('create_subject');
Route::middleware(['is_admin','is_teacher'])->get('/manage_subject',[SubjectController::class,'manageSubject'])->name('manage_subject');
Route::middleware('is_teacher')->post('/new_subject',[SubjectController::class,'newSubject'])->name('new_subject');
Route::middleware(['is_admin','is_teacher'])->get('/subject_edit/{id}',[SubjectController::class,'subjectEdit'])->name('subject_edit');
Route::middleware(['is_admin','is_teacher'])->post('/subject_update/{id}',[SubjectController::class,'updateSubject'])->name('update_subject');
Route::middleware('is_admin')->get('/subject_delete/{id}',[SubjectController::class,'subjectDelete'])->name('subject_delete');
Route::middleware('is_admin')->get('/change_subject_status/{id}',[SubjectController::class,'changeSubjectStatus'])->name('change_subject_status');

