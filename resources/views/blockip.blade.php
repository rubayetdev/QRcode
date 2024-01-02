<form action="{{route('block')}}" method="post">
    @csrf

@foreach($visitor as $visit)
    <p>{{$visit->ip_address}}</p><br>
    <input type="text" name="ip" value="{{$visit->ip_address}}">
    <p>{{$visit->visit_count}}</p>
    <button type="submit">Block Ip</button>
@endforeach

</form>
