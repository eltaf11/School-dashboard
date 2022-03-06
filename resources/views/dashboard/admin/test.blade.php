@extends('dashboard.admin.dashboard-admin')
@section('content')

    <form action="{{route('test')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Course</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Student UserName</label>
                    <input type="text" name="students_user_name" id="students_user_name" class="form-control" value="">
                    <span class="help-block">{{ ($errors->has('students_user_name')) ? $errors->first('students_user_name') : ''}}</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Courses Code</label>
                    <input type="text" name="courses_code" id="courses_code" class="form-control" value="">
                    <span class="help-block">{{ ($errors->has('courses_code')) ? $errors->first('courses_code') : ''}}</span>
                </div>
            </div>

            <div class="col-12">
                <input value="Add" type="submit" id="submit" class="btn btn-dark">
            </div>
        </div>
    </form>
@endsection




