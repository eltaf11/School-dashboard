<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use function view;

class DashboardController extends Controller
{
    public function Show()
    {
        $students = User::all();
        return view('dashboard.dashboard' , ['students' => $students]);
    }

    public function admin()
    {
        $studentNumber =  Student::count('id');
        $teacherNumber =  Teacher::count('id');
        $courseNumber  =  Course::count('id');
        return view('dashboard.admin.dashboard' , ['studentNumber' => $studentNumber ,
                                                               'teacherNumber' => $teacherNumber ,
                                                               'courseNumber'  => $courseNumber]);
    }

    public function student()
    {
        return view('dashboard.student.dashboard-student');
    }

    public function teacher()
    {
        return view('dashboard.teacher.dashboard-teacher');
    }
}
