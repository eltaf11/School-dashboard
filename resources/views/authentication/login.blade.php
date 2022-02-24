@extends('layouts.master')
@section('content')

<style>
    form {
        background: #fff;
        padding: 4em 4em 2em;
        max-width: 400px;
        margin: 50px auto 0;
        box-shadow: 0 0 1em #a0aec0;
        border-radius: 2px;
    }
    input {
        display: block;
        box-sizing: border-box;
        width: 100%;
        outline: none;
        margin: 0;
        border: 1px solid #dbdbdb;
        border-radius: 3px;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        background: #fff
    }

    input[type="submit"] {
        background: #282d32;
        color:floralwhite;
        padding: 15px;
        border-radius: 3px;
    }
    .help-block {
        color: red;
        font-size: 12px;
    }


</style>


<form action="{{route('login')}}" method="post">
    @csrf
    <h2>Login</h2>

    <p>
        <label for="email" class="floatLabel">Email</label>
        <input id="email" name="email" type="text">
        <span class="help-block">{{ ($errors->has('email')) ? $errors->first('email') : ''}}</span>

    </p>
    <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password" name="password" type="password">
        <span class="help-block">{{ ($errors->has('password')) ? $errors->first('password') : ''}}</span>

    </p>

    <p>
        <input type="submit" value="Login" id="submit">
    </p>
</form>


@endsection
