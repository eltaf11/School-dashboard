@extends('dashboard.admin.dashboard-admin')
@section('content')

            <h2>Add Teacher</h2>
            <hr>

            <form action="{{ route('teacher') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h4 class="form-title"><span>Teacher Information</span></h4>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="">
                            <span class="help-block">{{ ($errors->has('first_name')) ? $errors->first('first_name') : ''}}</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="">
                            <span class="help-block">{{ ($errors->has('last_name')) ? $errors->first('last_name') : ''}}</span>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>User Number</label>
                            <input type="text" name="user_number" id="user_number" class="form-control" value="">
                            <span class="help-block">{{ ($errors->has('user_number')) ? $errors->first('user_number') : ''}}</span>
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
                            <span class="help-block">{{ ($errors->has('gender')) ? $errors->first('gender') : ''}}</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <input value="Add Teacher" type="submit" id="submit" class="btn btn-dark">
                    </div>
                </div>
            </form>

@endsection

