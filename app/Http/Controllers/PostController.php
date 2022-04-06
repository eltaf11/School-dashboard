<?php

namespace App\Http\Controllers;

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
        $validated = $request->validated();
        Post::create($validated);
        $request->session()->regenerate();
        return back()->with('success', "Successful");

    }

    public function list() {
        $posts = Post::all();
        return view('dashboard.admin.posts.list' , ['posts' => $posts]);
    }


    public function show($id)
    {
        $posts = Post::findorfail($id);
        return view('dashboard.admin.posts.edit' , ['posts' => $posts]);
    }

    public function update(PostRequest $request ,$id)
    {
        $validated = $request->validated();
        $posts = Post::findorfail($id);
        $posts -> update($validated);
        $request->session()->regenerate();
        return redirect('/dashboard/admin/posts/list')->with('success', "Successful");
    }

    public function destroy($id)
    {
        $posts = Post::findorfail($id);
        $posts -> delete();
        return back()->with('success' , 'post has been deleted');
    }


}
