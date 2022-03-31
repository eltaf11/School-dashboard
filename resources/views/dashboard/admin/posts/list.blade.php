@extends('dashboard.admin.dashboard')
@section('content')

            <h3>Topics</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                    </tr>
                    </thead>
                    @foreach($posts as $post)
                    <tbody>
                    <tr>
                        <th scope="row">{{$post -> id}}</th>
                        <td>{{$post -> title }}</td>

                        <td>
                            <a href="edit/{{$post -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Edit</a>
                            <a href="delete/{{$post->id}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

@endsection
