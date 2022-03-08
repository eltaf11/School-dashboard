@extends('dashboard.admin.dashboard-admin')
@section('content')

    <form action="{{route('course')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Course</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" value="">
                    <span class="help-block">{{ ($errors->has('course_name')) ? $errors->first('course_name') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Instructor</label>
                    <input type="text" name="instructor" id="instructor" class="form-control" value="">
                    <span class="help-block">{{ ($errors->has('instructor')) ? $errors->first('instructor') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Unit</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="">
                    <span class="help-block">{{ ($errors->has('unit')) ? $errors->first('unit') : ''}}</span>
                </div>
            </div>

            <div class="col-12">
                <input value="Add Course" type="submit" id="submit" class="btn btn-dark">
            </div>
        </div>
    </form>
@endsection



