<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title', 'الصورة')</title>
</head>
<body>
    @if(count(data_get($electronic,'image')??[]))
    @foreach(data_get($electronic,'image') as $image)
    <a href="{{ route('electronics.image') }}"> <img src="{{ '/uploads/' . $image }}" class="img-fluid rounded-start" style="padding: 5px; width:100%;"></a>
    @endforeach
    @endif
</body>
</html>