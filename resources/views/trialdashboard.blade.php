@foreach ( $users as $user )
    <h1>{{$user ['name'] }}</h1>
    <h1>{{$user ['age'] }}</h1>
    @if ($user ['age'] <18 )
        <p> user cant drive</p>
    @endif
    <hr>
@endforeach

{{-- how to write functions using LaraBlade
 below is a dynamic function  --}}
 
@copyright {{date('Y')}}