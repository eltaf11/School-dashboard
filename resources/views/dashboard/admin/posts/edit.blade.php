@extends('dashboard.admin.dashboard')
@section('content')

    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Edit Post</span></h4>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$posts->title}}">
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('title')) ? $errors->first('title') : ''}}</span>
                </div>
            </div>

            <div class="col-12 col-sm-12">
                <div class="form-group">
                    <label>Body</label>
                    <textarea type="text" name="body" id="body" class="form-control" value="{{$posts->body}}"></textarea>
                    <span class="help-block" style="color: red; font-size: 12px">{{ ($errors->has('body')) ? $errors->first('body') : ''}}</span>
                </div>
            </div>

            <div class="col-12">
                <input value="Add Post" type="submit" id="submit" class="btn btn-dark">
            </div>
        </div>
    </form>
@endsection


