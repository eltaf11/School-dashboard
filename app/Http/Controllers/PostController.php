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
        $validated = $request->validated();
        Post::create($validated);
        $request->session()->regenerate();
        return back()->with('success', "Successful");
    }

    public function list() {
        $posts = Post::all();
        return view('dashboard.admin.posts.list' , ['posts' => $posts]);
    }

//    public function search(Request $request){
//        // Get the search value from the request
//        $search = $request->input('search');
//
//        // Search in the title and body columns from the posts table
//        $posts = Post::query()
//            ->where('title', 'LIKE', "%{$search}%")
//            ->orWhere('body', 'LIKE', "%{$search}%")
//            ->get();
//        // Return the search view with the resluts compacted
////        return view('search', compact('posts'));
//        return $posts;
//    }
}
