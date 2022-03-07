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
                        <th scope="col">User Number</th>
                        <th scope="col">Gender</th>


                    </tr>
                    </thead>
                    @foreach($studs as $stud)
                    <tbody>
                    <tr>
                        <th scope="row">{{$stud -> id}}</th>
                        <td>{{$stud -> first_name }}</td>
                        <td>{{$stud -> last_name }}</td>
                        <td>{{$stud -> user_number}}</td>
                        <td>{{$stud -> gender }}</td>

                        <td>
                            <a href="edit/{{$stud -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Edit</a>
                            <a href="delete/{{$stud->id}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">Delete</a>
                            <a href="/dashboard/courses/last/{{$stud -> user_number}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">test</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

@endsection
