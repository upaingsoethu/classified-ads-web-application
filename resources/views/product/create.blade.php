<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
        <p>{{$error}}</p>
        @endforeach
    </ul>

    @endif
<form action="{{route('data.store')}}" method="post">@csrf
    <input type="text" name="title" placeholder="Enter the title of product" value="{{old('title')}}"/>
    @error('title')
        <p>{{$message}}</p>
    @enderror

    <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
    @error('description')
    <p>{{$message}}</p>
    @enderror
    <button type="submit">Save</button>
</form>
</body>
</html>
