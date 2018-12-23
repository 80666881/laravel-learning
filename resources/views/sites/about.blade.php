@extends('app')

@section('content')
    @if($firstName == 'zeller')
        <h1>about me {{$firstName}}{{$lastName}}</h1>
    @else
        <h1>else</h1>
    @endif

    <hr>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
@stop
