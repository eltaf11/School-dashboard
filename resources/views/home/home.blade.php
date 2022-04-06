@extends('home.homeLayout')
@section('post')

            <div class="col-sm-2" style="border-right: solid 1px gray ">
                <h4>Top Lectures</h4>
                <ul class="nav nav-pills flex-column">
                    @foreach($posts as $post)
                    <li class="nav-item" style="border-bottom: 3px solid #f4f4f5">
                        <a class="nav-link " href="#">{{$post->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-sm-10">
                @foreach($posts as $post)
                    <a href="post/{{$post->id}}" style="text-decoration: none; color: black"><h2>{{$post->title}}</h2></a>
                    <p>{{$post->body}}</p>
                    <br>
                @endforeach
            </div>

@endsection




