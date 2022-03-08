<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get ('/', function () {return view('welcome');});
    Route::get ('/home' , function (){return view('home');});
    Route::get ('/register', [RegisterController::class, 'Show']);
    Route::post('/register', [RegisterController::class, 'Register'])->name('register');
    Route::get ('/login'   , [LoginController::class,    'Show']);
    Route::post('/login'   , [LoginController::class,    'Login'])->name('login');
    Route::get ('/logout'  , [LogoutController::class,   'Logout']);

    Route::prefix('dashboard')->middleware('auth')->group(function ()
    {
        Route::get ('/' ,                     [DashboardController::class,'Show']);
        Route::get ('/admin' ,                [DashboardController::class,'admin']);
        Route::get ('/student' ,              [DashboardController::class,'student']);
        Route::get ('/teacher' ,              [DashboardController::class,'teacher']);
        Route::get ('/students/add'  ,        [StudentController::class, 'create']);
        Route::post('/students/add'  ,        [StudentController::class, 'store'])->name('student');
        Route::get ('/students/list' ,        [StudentController::class, 'list']);
        Route::get ('/students/delete/{id}' , [StudentController::class, 'destroy']);
        Route::get ('/students/edit/{id}' ,   [StudentController::class, 'show']);
        Route::post('/students/edit/{id}' ,   [StudentController::class, 'update']);
        Route::get ('/teachers/add'  ,        [TeacherController::class, 'create']);
        Route::post('/teachers/add'  ,        [TeacherController::class, 'store'])->name('teacher');
        Route::get ('/teachers/list' ,        [TeacherController::class, 'list']);
        Route::get ('/teachers/delete/{id}' , [TeacherController::class, 'destroy']);
        Route::get ('/teachers/edit/{id}' ,   [TeacherController::class, 'show']);
        Route::post('/teachers/edit/{id}' ,   [TeacherController::class, 'update']);
        Route::get ('/courses/add'  ,         [CourseController::class, 'create']);
        Route::post('/courses/add'  ,         [CourseController::class, 'store'])->name('course');
        Route::get ('/courses/list' ,         [CourseController::class, 'list']);
        Route::get ('/courses/delete/{id}' ,  [CourseController::class, 'destroy']);
        Route::get ('/courses/edit/{id}' ,    [CourseController::class, 'show']);
        Route::post('/courses/edit/{id}' ,    [CourseController::class, 'update']);



//        Route::get ('/courses/test' ,[CourseController::class, 'test_show']);
//        Route::post('/courses/test' ,[CourseController::class, 'test_store'])->name('test');
        Route::get ('/courses/last/{id}' ,[CourseController::class, 'test_id']);

    });


});











