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
        return view('dashboard.admin.teachers.add');
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
        return back()->with('success', "Successful");
    }


    public function list()
    {
        $teachers = Teacher::all();
        return view('dashboard.admin.teachers.list' ,['teachers' => $teachers]);
    }


    public function show($id)
    {
        $info = Teacher::findorfail($id);
        return view('dashboard.admin.teachers.edit' , ['info' => $info]);
    }


    public function update(TeacherRequest $request ,$id)
    {
        $validated = $request->validated();
        $info = Teacher::findorfail($id);
        $info -> update($validated);
        return redirect('/dashboard/admin/teachers/list')->with('success', "Successful");
    }


    public function destroy($id)
    {
        $teacher = Teacher::findorfail($id);
        $teacher -> delete();
        return back()->with('success', 'User has been deleted');
    }
}
