<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\TeacherRequest;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.teachers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TeacherRequest $request
     * @return RedirectResponse
     */

    public function store(TeacherRequest $request)
    {
        $validated = $request->validated();

        Teacher::create($validated);

        $request->session()->regenerate();

        return back()->with('success', "Successful");
    }

    public function list()
    {
        $teachers = Teacher::all();
        return view('dashboard.teachers.list' ,['teachers' => $teachers]);
    }
}
