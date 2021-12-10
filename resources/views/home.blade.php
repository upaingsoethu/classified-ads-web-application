<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @if (count($products))
    @foreach ($products as $product )
        {{$product}}

    @endforeach

    @else
    <p>No any product to show!</p>
    @endif --}}

    @forelse ( $products as $product )
        {{$product}}
    @empty
        <p>No Products</p>
    @endforelse
</body>
</html>
