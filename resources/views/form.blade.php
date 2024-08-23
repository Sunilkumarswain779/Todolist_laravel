@extends('main.layouts')
@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div> <br>
        <form action="{{route('insert.data')}}" align="center" border="1" method="POST">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Name"><br> <br>
            <label for="">Mark</label>
            <input type="text" name="mark" placeholder="Enter marks"><br> <br>
            <input type="submit" value="Add">
        </form>
    </div>
</body>
</html>
@endsection
