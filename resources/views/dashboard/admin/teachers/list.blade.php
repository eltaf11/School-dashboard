@extends('dashboard.admin.dashboard-admin')
@section('content')

            <h3>Teachers</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">User Number</th>
                        <th scope="col">Gender</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    @foreach($teachers as $teacher)
                    <tbody>
                    <tr>
                        <th scope="row">{{$teacher -> id}}</th>
                        <td>{{$teacher -> first_name }}</td>
                        <td>{{$teacher -> last_name }}</td>
                        <td>{{$teacher -> user_number }}</td>
                        <td>{{$teacher -> gender }}</td>
                        <td>
                            <a href="edit/{{$teacher -> id}}" style="background-color: #8b8b8b; color: black; border: none" class="btn btn-primary">Edit</a>
                            <a href="delete/{{$teacher->id}}" style="background-color: #8b8b8b; border: none; color: black" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
@endsection
