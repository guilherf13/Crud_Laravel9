{{--<h1>O valor da soma de {{$var1}} com {{$var2}} é {{$calculo}}</h1>--}}
<ul>
@foreach ($valores as $item)
    <li>{{$item}}</li>
@endforeach
</ul>