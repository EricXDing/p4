@extends('template.master')

@section('title')

@endsection


@section('content')


List of all the People in your Network
<hr>
@foreach($people as $name => $person)
        <h2>{{ $person['name'] }}</h2>
        <p>Email: {{ $person['email'] }}</p>
        <p>Message for {{ $person['name'] }}</p>

@endforeach

@endsection
