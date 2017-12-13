@extends('template.master')

@section('title')

@endsection


@section('content')


List of all the People in your Network
<hr>
@foreach($people as $name => $person)
        <h2>{{ $person['name'] }}</h2>
        <p>Email: {{ $person['email'] }}</p>
        <p>Message for {{ $person['name'] }}
        <form>
        <textarea rows="3" cols="40"></textarea>
        <input type="submit" value="Send Message">
        </form>
        <a href='{{ $person['id'] }}/edit'>edit</a> | <a href='{{ $person['id'] }}/delete'>delete</a>
@endforeach

@endsection
