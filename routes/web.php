<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
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

    Route::prefix('dashboard')->middleware('auth')->group(function ()
    {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'show');
            Route::get('/admin', 'admin');
            Route::get('/student', 'student');
            Route::get('/teacher', 'teacher');
        });
        Route::controller(StudentController::class)->prefix('admin')->group(function () {
            Route::get ('/students/add', 'create');
            Route::post('/students/add', 'store')->name('student');
            Route::get ('/students/list', 'list');
            Route::get ('/students/delete/{id}', 'destroy');
            Route::get ('/students/edit/{id}', 'show');
            Route::post('/students/edit/{id}', 'update');
        });
        Route::controller(TeacherController::class)->prefix('admin')->group(function () {
            Route::get ('/teachers/add', 'create');
            Route::post('/teachers/add', 'store')->name('teacher');
            Route::get ('/teachers/list', 'list');
            Route::get ('/teachers/delete/{id}', 'destroy');
            Route::get ('/teachers/edit/{id}', 'show');
            Route::post('/teachers/edit/{id}', 'update');
        });
        Route::controller(CourseController::class)->prefix('admin')->group(function () {
            Route::get ('/courses/add', 'create');
            Route::post('/courses/add', 'store')->name('course');
            Route::get ('/courses/list', 'list');
            Route::get ('/courses/delete/{id}', 'destroy');
            Route::get ('/courses/edit/{id}', 'show');
            Route::post('/courses/edit/{id}', 'update');
        });

//        Route::get ('/courses/test' ,[CourseController::class, 'test_show']);
//        Route::post('/courses/test' ,[CourseController::class, 'test_store'])->name('test');
        Route::get ('/courses/last/{id}' ,[CourseController::class, 'test_id']);

    });


});











