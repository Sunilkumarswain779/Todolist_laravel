<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('update_user', $data->id)}}" method="POST" align="center">
            @csrf
            <label for="">Name</label>
            <input type="text" value="{{$data->name}}" name="name"> <br> <br>
            <label for="">Mark</label>
            <input type="text" value="{{$data->marks}}" name="mark"> <br> <br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>