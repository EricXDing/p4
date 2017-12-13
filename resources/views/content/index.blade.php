@extends('template.master')

@section('title')

@endsection


@section('content')
<div id = 'search'>
  <b>Select a Relationship Category</b>
  <form action="/">
    <select name="selection">
        <option value>All</option>
      @foreach ($relationships as $id => $type)
        <option value="{{$id}}">{{$type}}</option>
      @endforeach
    </select>
    <input type="submit">
  </form>
  <b>{{ $display }}</b>
</div>
@foreach ($people as $person)
  <p class ='people'>
  <h2>{{ $person['name'] }}</h2>
  <p>Email: {{ $person['email'] }}</p>
  <p>Message for {{ $person['name'] }}
  <form>
  <textarea rows="3" cols="40"></textarea>
  <input type="submit" value="Send Message">
  </form>
  <a href='{{ $person['id'] }}'>edit</a> | <a href='{{ $person['id'] }}/delete'>delete</a>
@endforeach

@endsection
