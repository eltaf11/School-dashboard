<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseStudentRequest;
use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\User;
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

    public function show($id)
    {
        $course = Course::findorfail($id);
        return view('dashboard.admin.courses.edit' , ['course' => $course]);
    }


    public function update(CourseRequest $request ,$id)
    {
        $validated = $request->validated();
        $course = Course::findorfail($id);
        $course -> update($validated);
        $request->session()->regenerate();
        return redirect('/dashboard/courses/list')->with('success', "Successful");
    }


    public function destroy($id)
    {
        $course = Course::findorfail($id);
        $course -> delete();
        return back()->with('success' , 'Course has been deleted');
    }


//    public function test_show()
//    {
//        return view('dashboard.admin.test');
//    }
//
//
//    public function test_store(CourseStudentRequest $request)
//    {
//        $validated = $request->validated();
//        StudentCourse::create($validated);
//        $request->session()->regenerate();
//        return back()->with('success' , "Successful");
//    }
//
    public function test_id($id)
    {
        $test = StudentCourse::all();

    }


}
