<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('dashboard.admin.courses.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CourseRequest $request
     * @return RedirectResponse
     */

    public function store(CourseRequest $request)
    {
        $validated = $request->validated();

        Course::create($validated);

        $request->session()->regenerate();

        return back()->with('success', "Successful");
    }

    public function  list()
    {
        $course = Course::all();
        return view('dashboard.admin.courses.list' ,['course' => $course]);
    }
}
