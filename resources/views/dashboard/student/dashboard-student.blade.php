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
</style>

<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow" style="background-color: #282d32 !important; height: 60px ">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"  style="background-color: #282d32">Student Dashboard</a>
    <input type="text" class="form-control form-control-primary w-80" placeholder="Search..." >
    <a class="btn btn-primary" href="#" style="background-color: #282d32; border-color: #282d32; ">Search</a>

    <div class="nav-item nav-link dropdown-toggle mr-md-2 dropdown" >
        <a style="border: none #282d32;background-color: #282d32; box-shadow: none" class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            You
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
            <a class="dropdown-item" href="#">Name</a>
            <a class="dropdown-item" href="#">Email</a>
            <a class="dropdown-item" href="/home">Logout</a>
        </div>
    </div>

</nav>

<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidear -->
        <div class="col-md-2 bg-light d-none d-md-block sidebar">
            <div class="left-sidebar">
                <ul class="nav flex-column sidebar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/student">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            Dashboard
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h1>Welcome Student</h1>
            <br>


        </main>
    </div>
</div>


</body>
</html>
