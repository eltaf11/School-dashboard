
<style>
    /* Add a black background color to the top navigation */
    .topnav {
        background-color: #282d32;
        overflow: hidden;
    }

    .login
    {
        float: right !important;
        padding-right: 10px !important;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        padding-right: 50px;
    }

    /* Add an active class to highlight the current page */
    .active {
        /*background-color: white;*/
        color: white;
    }

    /* Hide the link that should open and close the topnav on small screens */
    .topnav .icon {
        display: none;
    }

    /* Dropdown container - needed to position the dropdown content */
    .dropdown {
        float: left;
        overflow: initial;
    }

    /* Style the dropdown button to fit inside the topnav */
    .dropdown   .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
        display: flex;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Style the links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

</style>

<div class="topnav" id="myTopnav">
    <a style="color: white; padding-right: 260px; font-style: oblique">MEHRGAN HIGH SCHOOL</a>
    <a href="/home" class="active">Home</a>
    <a href="/dashboard">Dashboard</a>
    <a href="#contact">Contact</a>

    <a href="#about">About</a>
    @if(Route::has('login'))
        @auth
            <a style="padding-left: 303px;" class="" href="/logout">Logout</a>
        @else
            <a class="login" href='login'>Login</a>
            @if(Route::has('register'))
            <a class="login" href='/register'>Sign up</a>
            @endif
        @endauth
    @endif


{{--    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>--}}
</div>
