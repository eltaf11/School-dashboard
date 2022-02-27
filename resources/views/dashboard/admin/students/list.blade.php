@extends('dashboard.admin.dashboard-admin')
@section('content')

            <h3>Students</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Father name</th>
                        <th scope="col">ID</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course ID</th>
{{--                        <th scope="col">Join Date</th>--}}
{{--                        <th scope="col">Mobile</th>--}}
{{--                        <th scope="col">Address</th>--}}


                    </tr>
                    </thead>
                    @foreach($studs as $stud)
                    <tbody>
                    <tr>
                        <th scope="row">{{$stud -> id}}</th>
                        <td>{{$stud -> first_name }}</td>
                        <td>{{$stud -> last_name }}</td>
                        <td>{{$stud -> father_name }}</td>
                        <td>{{$stud -> student_id}}</td>
                        <td>{{$stud -> gender }}</td>
                        <td>{{$stud -> course_name }}</td>
                        <td>{{$stud -> course_id }}</td>
{{--                        <td>{{$stud -> joining_date }}</td>--}}
{{--                        <td>{{$stud -> mobile_number }}</td>--}}
{{--                        <td>{{$stud -> address }}</td>--}}
                        <td>
                            <a href="edit/{{$stud -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Edit</a>
                            <a href="delete/{{$stud->id}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

@endsection
