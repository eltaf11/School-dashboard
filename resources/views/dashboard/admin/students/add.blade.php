@extends('dashboard.admin.dashboard')
@section('content')

    <form action="{{ route('student') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Student's Information</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('first_name')) ? $errors->first('first_name') : ''}}</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('last_name')) ? $errors->first('last_name') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control select">
                        <option></option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Others</option>
                    </select>
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('gender')) ? $errors->first('gender') : ''}}</span>
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('mobile_number')) ? $errors->first('mobile_number') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control"></textarea>
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('address')) ? $errors->first('address') : ''}}</span>
                </div>
            </div>

            <div class="col-12">
                <input value="Add Student" type="submit" id="submit" class="btn btn-dark">
            </div>
        </div>
    </form>
@endsection


