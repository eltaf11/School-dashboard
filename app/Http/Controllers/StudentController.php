<?php

namespace App\Http\Controllers;


use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory;


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
        return view('dashboard.students.add');
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

        Student::create($request->$validated);

        $request->session()->regenerate();

        return back()->with('success', "Successful");
    }

    public function list()
    {
        $studs = User::all();
        return view('dashboard.students.list' ,['studs' => $studs]);
    }

    public function show($id)
    {
        $info = User::find($id);
        return \view('dashboard.students.edit' , ['info' => $info]);
    }

    public function update()
    {

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'User has been deleted');
    }



}
