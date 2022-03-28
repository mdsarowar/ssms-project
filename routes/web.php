<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\PageViewController;
use App\Http\Controllers\Admin\RoleController;

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
Route::get('/login',[PageViewController::class,'home'])->name('login');
//Route::get('/register',[PageViewController::class,'register'])->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home.home');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/create_role',[RoleController::class,'createRole'])->name('create_role');
    Route::post('/new_role',[RoleController::class,'newRole'])->name('new_role');
});
