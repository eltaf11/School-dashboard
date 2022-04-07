<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {

        $posts = Post::latest('title')->limit(3)->get();
        return view('home.home' , ['posts' => $posts]);
    }

    public function singlePost($id) {

        $post = Post::findorfail($id);
        return view('home.singlePost' , ['post'=>$post]);
    }

    public function search(Request $request) {

        if($request->isMethod('post'))
        {
            $search = $request->get('name');
            $searchResults = Post::where('title' ,'LIKE' , '%'.$search.'%')->get();
        }
        return view('home.searchResult' , ['searchResults' => $searchResults]);
    }

}
