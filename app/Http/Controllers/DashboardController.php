<?php

namespace App\Http\Controllers;

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
        $count = User::count('id');
        return view('dashboard.admin.dashboard-admin' , ['count' => $count]);
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
