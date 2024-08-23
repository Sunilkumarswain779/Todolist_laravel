@extends('main.layouts')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>
<body>
    @section('content')
     <table align="center" cellpadding="4" border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Marks</th>
            <th>Details</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        @foreach ($data as $key=>$value)
        <tr>
         <td>{{$value->id}}</td>
         <td>{{$value->name}}</td>
         <td>{{$value->marks}}</td>
         <td><a href="{{route('details',$value->id)}}" class="btn btn-primary">view</a></td>
         <td><a href="{{route('delete',$value->id)}}" class="btn btn-danger">Delete</a></td>
         <td><a href="{{route('update',$value->id)}}" class="btn btn-danger">Update</a></td>

       </tr>
        
            @endforeach
    </table> <br>
     <div align="center">{{$data->links()}}</div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</body>
</html>
@endsection