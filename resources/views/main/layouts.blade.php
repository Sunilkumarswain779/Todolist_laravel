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
        <div style="background-color: #7fff00; padding:0.5%"><h1>Yahoo Baba</h1></div>
        <div style="display: flex; background-color:cornflowerblue">
            <a href="{{route('home')}}">Home<span>|</span></a>
            <a href="{{route('about')}}">About<span>|</span></a>
            <a href="{{route('post')}}">Post</a> <span>|</span>
            <a href="{{route('student.data')}}">Student_data</a><span>|</span>
            <a href="{{route('student.form')}}">Insert-Data</a>


        </div>
        <div style=" height: 100vh; float: right; background-color: lightblue;">
            <aside align="center">
                <ul>
                    <li><a href="{{route('home')}}">Home </a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('post')}}">Post</a></li>
                </ul>
            </aside>
        </div>
        @yield('content')
        <div style="margin-top: 30%; background-color:cornflowerblue">
            <footer>
                <h4>@CopyRightofsunilkumarswain2024</h4>
            </footer>
        </div>
    </div>
</body>
</html>