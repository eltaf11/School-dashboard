
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
        <h2>Results</h2>
        <br><br><br>
        @foreach($searchResults as $searchResult)
        <div class="col-sm-12">
           <a style="color: black; text-decoration: none" href="/home"> <h4>{{$searchResult->title}}</h4></a>
           <span style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><a>{{$searchResult->body}}</a></span>
            <hr>
        </div>

        @endforeach
    </div>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@include('layouts.footer')

</body>
</html>





