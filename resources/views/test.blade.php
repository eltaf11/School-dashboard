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
            @foreach($users as $user)
                <tbody>
                <tr>

                    <td>{{$user -> first_name }}</td>
                    <td>{{$user -> last_name }}</td>
                    <td>{{$user -> student_id }}</td>
                    <td>{{$user -> instructor }}</td>



{{--                    <td>--}}
{{--                        <a href="course_registered/{{$courses -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Registered Students</a>--}}
{{--                        <a href="edit/{{$courses -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Edit</a>--}}
{{--                        <a href="delete/{{$courses ->id}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">Delete</a>--}}
{{--                    </td>--}}
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection


