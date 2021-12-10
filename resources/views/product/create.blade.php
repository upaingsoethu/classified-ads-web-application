<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('data.store')}}" method="post">@csrf
    <input type="text" name="title" placeholder="Enter the title of product"/>
    <button type="submit">Save</button>
</form>
</body>
</html>
