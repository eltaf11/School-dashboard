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


    </style>

    <form action="" method="post">
        @csrf
        <h2>Sign Up</h2>
        <p>
            <label for="name" class="floatLabel">Name</label>
            <input id="name" name="name" type="text" value="{{$info->name}}">
        </p>

        <p>
            <label for="email" class="floatLabel">Email</label>
            <input id="email" name="email" type="text" value="{{$info->email}}">
        </p>
        <p>
            <label for="password" class="floatLabel">Password</label>
            <input id="password" name="password" type="password" value="password">
            {{--        <span>Enter a password longer than 8 characters</span>--}}
        </p>

        <p>
            <input type="submit" value="Create Account" id="submit">
        </p>
    </form>

@endsection
