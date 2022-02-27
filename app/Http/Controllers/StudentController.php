<?php

namespace App\Http\Controllers;


use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use function back;
use function view;


class StudentController extends Controller
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
        return view('dashboard.admin.students.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param StudentRequest $request
     * @return RedirectResponse
     */

    public function store(StudentRequest $request)
    {
        $validated = $request->validated();

        Student::create($validated);

        $request->session()->regenerate();

        return back()->with('success', "Successful");
    }

    public function list()
    {
        $studs = Student::all();
        return view('dashboard.admin.students.list' ,['studs' => $studs]);
    }

    public function show($id)
    {
        $info = Student::findorfail($id);

        return view('dashboard.admin.students.edit' , ['info' => $info]);
    }

    public function update(StudentRequest $request ,$id)
    {
        $validated = $request->validated();

        $info = Student::findorfail($id);
        $info -> update($validated);

        $request->session()->regenerate();
        return redirect('/dashboard/students/list')->with('success', "Successful");
    }

    public function destroy($id)
    {
        $user = Student::findorfail($id);
        $user->delete();
        return back()->with('success', 'User has been deleted');
    }

}
