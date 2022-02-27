@extends('dashboard.admin.dashboard-admin')
@section('content')

    <h3>Courses</h3>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course ID</th>
                <th scope="col">Instructor</th>
                <th scope="col">Unit</th>

            </tr>
            </thead>
            @foreach($course as $courses)
                <tbody>
                <tr>
                    <th scope="row">{{$course -> id}}</th>
                    <td>{{$course -> course_name }}</td>
                    <td>{{$course -> course_id }}</td>
                    <td>{{$course -> instructor }}</td>
                    <td>{{$course -> unit}}</td>

                    <td>
                        <a href="edit/{{$course -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Edit</a>
                        <a href="delete/{{$course->id}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection

