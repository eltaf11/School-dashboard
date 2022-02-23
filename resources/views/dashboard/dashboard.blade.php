<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="../dashboard.css" >--}}
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

<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow" style="background-color: #282d32 !important; height: 100px; text-align: center !important;">
    <a class="navbar-brand col-sm-10 col-md-12 mr-0" style="text-align: left; background-color: #282d32; padding-left: 50px"><h2>My Dashboard</h2></a>

</nav>


<body>
<div class="container-fluid">
    <br><br><br><br><br><br>

        <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-2">
            <!-- information cards -->
            <h3 style="border-bottom: 2px solid black">Welcome to Dashboard</h3>
            <br>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div style="text-align: center;  height:100px; border-radius: 2px;background-color: #282d32 " class="card bg-four w-100">
                        <div class="card-body">
                            <h2><a href="" style="text-decoration: none; color:white; ">Student</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div style="border-radius: 2px; ; background-color: #282d32 " class="card bg-four w-100">
                        <div class="card-body" style="text-align: center">
                            <h2><a href="" style="text-decoration: none; color:white; ">Teacher</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div style="border-radius: 2px; background-color: #282d32 " class="card bg-four w-100">
                        <div class="card-body" style="text-align: center">
                            <h2><a href="/dashboard/admin" style="text-decoration: none; color:white;">Admin</a></h2>
                        </div>
                    </div>
                </div>

            </div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
