<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h3>Our Index Page</h3>
   <li>
       @foreach ($datas as $data )
       <p>{{$data->title}} {{$data->body}}</p>
       @endforeach
   </li>
   {{$datas->links()}}
</body>
</html>
