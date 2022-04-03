<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\PostRequest;
use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('dashboard.admin.posts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return RedirectResponse
     */

    public function store(PostRequest $request)
    {
        Post::create($request);
        $request->session()->regenerate();
        return back()->with('success', "Successful");
    }

    public function list() {
        $posts = Post::all();
        return view('dashboard.admin.posts.list' , ['posts' => $posts]);
    }


}
