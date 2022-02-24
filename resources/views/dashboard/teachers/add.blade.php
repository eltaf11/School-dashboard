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
    .help-block {
        color: red;
        font-size: 12px;
    }
</style>

<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow" style="background-color: #282d32 !important; height: 60px ">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"  style="background-color: #282d32">My Dashboard</a>
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
{{--@include('authentication.errors')--}}
<div class="container-fluid">
    <div class="row">
        <!-- Sidear -->
        <div class="col-md-2 bg-light d-none d-md-block sidebar">
            <div class="left-sidebar">
                <ul class="nav flex-column sidebar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/admin">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            Dashboard
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/students/list">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            List Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/students/add">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            Add Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            Invoices
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
                            <label>Teacher ID</label>
                            <input type="text" name="teacher_id" id="teacher_id" class="form-control" value="">
                            <span class="help-block">{{ ($errors->has('teacher_id')) ? $errors->first('teacher_id') : ''}}</span>
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

                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Course Name</label>
                            <input type="text" name="course_name" id="course_name" class="form-control" value="">
                            <span class="help-block">{{ ($errors->has('course_name')) ? $errors->first('course_name') : ''}}</span>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Course ID</label>
                            <input type="text" name="course_id" id="course_id" class="form-control" value="">
                            <span class="help-block">{{ ($errors->has('course_id')) ? $errors->first('course_id') : ''}}</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <input value="Add Student" type="submit" id="submit" class="btn btn-dark">
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}
</body>
</html>
