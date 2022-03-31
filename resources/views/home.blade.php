
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    
    </style>
</head>

@include('layouts.header')

<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-2" style="border-right: solid 1px gray ">
                <h2>Topics</h2>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="#">Topic 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topic 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topic 3</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-10">
                <h2>{{$posts->title}}</h2>
                <p>{{$posts->body}}</p>
                <br>
                <h2>{{$posts->title}}</h2>
                <p>{{$posts->body}}</p>
            </div>
        </div>
    </div>


<br><br>

@include('layouts.footer')

</body>
</html>




