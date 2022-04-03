
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
<form action="/search" method="post">
    {{csrf_field()}}
    <div style="display: flex">
        <input type="text" class="form-control form-control-primary w-80" name="name"  placeholder="search..." style="width: 93%"/>
        <input type="submit" value="search" style="width: 7%; background-color: #282d32; color: #FFFFFF; padding: 3px"/>
    </div>
</form>

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
                @foreach($posts as $post)
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->body}}</p>
                    <br>
                @endforeach
            </div>

        </div>
    </div>


<br><br>

@include('layouts.footer')

</body>
</html>




