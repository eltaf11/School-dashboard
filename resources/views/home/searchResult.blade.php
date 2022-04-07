@extends('home.homeLayout')
@section('post')

        <h1 style="color: black">Results</h1>
        <hr><br><br>
        @foreach($searchResults as $searchResult)
        <div class="col-sm-12">
           <a style="color: black; text-decoration: none" href="/post/{{$searchResult->id}}"> <h4>{{$searchResult->title}}</h4></a>
           <span style="display: block;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><a>{{$searchResult->body}}</a></span>
            <hr>
        </div>
        @endforeach
        <strong><a href="/home" style="text-decoration: none; color: black"><-back</a></strong>
        <br><br><br> <br><br><br> <br><br><br>

@endsection



