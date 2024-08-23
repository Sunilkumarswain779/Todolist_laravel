
   @foreach ($data as $key => $value)
     <h1>{{$value->id}}</h1>
     <h1>{{$value->name}}</h1>
     <h1>{{$value->marks}}</h1>
   @endforeach