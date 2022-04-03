<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {

        $posts = Post::all()->first();

        return view('home' , ['posts' => $posts]);
    }



public function search(Request $request) {
        if($request->isMethod('post'))
        {
            $search = $request->get('name');
            $searchResults = Post::where('title' ,'LIKE' , '%'.$search.'%')->get();

        }
    return view('search' , ['searchResults' => $searchResults]);
}




}
