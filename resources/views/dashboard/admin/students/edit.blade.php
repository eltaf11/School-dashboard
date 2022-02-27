@extends('dashboard.admin.dashboard-admin')
@section('content')

    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Student Information</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{$info->first_name}}">
                    <span class="help-block">{{ ($errors->has('first_name')) ? $errors->first('first_name') : ''}}</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{$info->last_name}}">
                    <span class="help-block">{{ ($errors->has('last_name')) ? $errors->first('last_name') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" name="student_id" id="student_id" class="form-control" value="{{$info->student_id}}">
                    <span class="help-block">{{ ($errors->has('student_id')) ? $errors->first('student_id') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" name="father_name" id="father_name" class="form-control" value="{{$info->father_name}}">
                    <span class="help-block">{{ ($errors->has('father_name')) ? $errors->first('father_name') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control select">
                        <option>{{$info->gender}}</option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Others</option>
                    </select>
                    <span class="help-block">{{ ($errors->has('gender')) ? $errors->first('gender') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" value="{{$info->course_name}}">
                    <span class="help-block">{{ ($errors->has('course_name')) ? $errors->first('course_name') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Course ID</label>
                    <input type="text" name="course_id" id="course_id" class="form-control" value="{{$info->course_id}}">
                    <span class="help-block">{{ ($errors->has('course_id')) ? $errors->first('course_id') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Joining Date</label>
                    <div>
                        <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{$info->joining_date}}">
                        <span class="help-block">{{ ($errors->has('joining_date')) ? $errors->first('joining_date') : ''}}</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="{{$info->mobile_number}}">
                    <span class="help-block">{{ ($errors->has('mobile_number')) ? $errors->first('mobile_number') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group" >
                    <label>Address</label>
                    <textarea name="address" class="form-control" >{{$info->address}}"</textarea>
                    <span class="help-block">{{ ($errors->has('address')) ? $errors->first('address') : ''}}</span>
                </div>
            </div>

            <div class="col-12">
                <input value="Edit" type="submit" id="submit" class="btn btn-dark">
            </div>
        </div>
    </form>
@endsection
