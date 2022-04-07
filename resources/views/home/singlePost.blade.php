@extends('home.homeLayout')
@section('post')

    <div class="col-sm-10">
            <h2 style="color: black">{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            <br>
        <strong><a href="/home" style="text-decoration: none; color: black"><-back</a></strong>
    </div>

@endsection
