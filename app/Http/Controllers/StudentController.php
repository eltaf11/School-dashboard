<?php

namespace App\Http\Controllers;


use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class StudentController extends Controller
{
    public function show()
    {
        return view('dashboard.students.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param StudentRequest $request
     * @return Application|RedirectResponse|Redirector
     */

    public function add(StudentRequest $request)
    {
        $validated = $request->validated();

        Student::create($validated);

        return redirect('/')->with('success', "Successful");
    }

    public function list()
    {
        $studs = User::all();
        return view('dashboard.students.list', ['studs' => $studs]);
    }

    public function edit_show(Reques $request , $id)
    {
        $test = User::with('id' , $id)->first();
        return view('dashboard.students.edit' , ['test' => $test]);
    }

}
