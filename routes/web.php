<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\PageViewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeacherController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/create_role',[RoleController::class,'createRole'])->name('create_role');
    Route::post('/new_role',[RoleController::class,'newRole'])->name('new_role');
    Route::get('/manage_role',[RoleController::class,'manageRole'])->name('manage_role');
    Route::get('/create_teacher',[TeacherController::class,'createTeacher'])->name('create_teacher');
    Route::get('/manage_teacher',[TeacherController::class,'manageTeacher'])->name('manage_teacher');
    Route::post('/new_teacher',[TeacherController::class,'newTeacher'])->name('new_teacher');
    Route::get('/teacher_edit/{id}',[TeacherController::class,'teacherEdit'])->name('teacher_edit');
    Route::post('/update_teacher',[TeacherController::class,'updateTeacher'])->name('update_teacher');
});
