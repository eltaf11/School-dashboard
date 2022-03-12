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
    Route::get ('/home' , function (){return view('home');});
    Route::get ('/register', [RegisterController::class, 'Show']);
    Route::post('/register', [RegisterController::class, 'Register'])->name('register');
    Route::get ('/login'   , [LoginController::class,    'Show']);
    Route::post('/login'   , [LoginController::class,    'Login'])->name('login');
    Route::get ('/logout'  , [LogoutController::class,   'Logout']);

    Route::prefix('dashboard')->middleware( 'auth'  )->group(function ()
    {
        Route::get('/',        [DashboardController::class , 'show']);
        Route::get('/admin',   [DashboardController::class , 'admin'])->middleware('admin');
        Route::get('/student', [DashboardController::class , 'student'])->middleware('student');
        Route::get('/teacher', [DashboardController::class , 'teacher'])->middleware('teacher');

        Route::prefix('admin/students')->group(function () {
            Route::get ('/add',         [StudentController::class , 'create']);
            Route::post('/add',         [StudentController::class , 'store'])->name('student');
            Route::get ('/list',        [StudentController::class , 'list']);
            Route::get ('/delete/{id}', [StudentController::class , 'destroy']);
            Route::get ('/edit/{id}',   [StudentController::class , 'show']);
            Route::post('/edit/{id}',   [StudentController::class , 'update']);
        });

        Route::prefix('admin/teachers')->group(function () {
            Route::get ('/add',         [TeacherController::class , 'create']);
            Route::post('/add',         [TeacherController::class , 'store'])->name('teacher');
            Route::get ('/list',        [TeacherController::class , 'list']);
            Route::get ('/delete/{id}', [TeacherController::class , 'destroy']);
            Route::get ('/edit/{id}',   [TeacherController::class , 'show']);
            Route::post('/edit/{id}',   [TeacherController::class , 'update']);
        });

        Route::prefix('admin/courses')->group(function () {
            Route::get ('/add',         [CourseController::class , 'create']);
            Route::post('/add',         [CourseController::class , 'store'])->name('course');
            Route::get ('/list',        [CourseController::class , 'list']);
            Route::get ('/delete/{id}', [CourseController::class , 'destroy']);
            Route::get ('/edit/{id}',   [CourseController::class , 'show']);
            Route::post('/edit/{id}',   [CourseController::class , 'update']);
        });

//        Route::get ('/courses/test' ,[CourseController::class, 'test_show']);
//        Route::post('/courses/test' ,[CourseController::class, 'test_store'])->name('test');
        Route::get ('/courses/last/{id}' ,[CourseController::class, 'test_id']);

    });


});











