<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../dashboard.css" >
    <title>dashboard</title>
</head>

<style>
    .sidebar {
        position: fixed;
        left: 0;
        bottom: 0;
        top: 0;
        z-index: 100;
        padding: 70px 0 0 10px;
        border-right: 1px solid #d3d3d3;
    }

    .left-sidebar {
        position: sticky;
        top:0;
        height: calc(100vh - 70px)
    }

    .sidebar-nav li .nav-link {
        color: #333;
        font-weight: 500;
    }
    main {
        padding-top: 90px;
    }
    main .card {
        margin-bottom: 20px;
    }
    .dropdown {
        float: left;
        overflow: hidden;
    }
    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        padding-right: 80px;
    }
    .dropdown-content {
        display: none;
        position: fixed;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

</style>

<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow" style="background-color: #282d32 !important; height: 60px ">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"  style="background-color: #282d32">Admin Dashboard</a>

    <div class="dropdown">
        <button class="dropbtn">You
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">

            <a href="#">Name</a>
            <a href="#">Email</a>
            <a href="#">Role</a>

        </div>
    </div>
</nav>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidear -->
        @include('dashboard.admin.sidebar')
        <!-- Sidear -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h1>Welcome Admin</h1>
            <br>
            @if (\Request::is('*/admin'))
                @include('dashboard.admin.carts')
            @endif
            @yield('content')
        </main>
    </div>
</div>


</body>
</html>
