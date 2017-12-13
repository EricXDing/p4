@extends('template.master')

@section('title')

@endsection


@section('content')

  <form method='POST' action='/add'>
      {{ csrf_field() }}
      * Required fields
      <label for='Name'>* Name</label>
      <input type='text' name='name' id='name' value='{{ old('name=""') }}'>

      <label for='email'>* Email</label>
      <input type='text' name='email' id='email' value='{{ old('email') }}'>

      <input type="checkbox" name="relations" value="coworker">Co-Worker<br>
      <input type="checkbox" name="relations" value="classmate">Classmate<br>
      <input type="checkbox" name="relations" value="friend">Friend<br>
      <input type="checkbox" name="relations" value="mentor">Mentor<br>
      <input type="checkbox" name="relations" value="other">Other<br>


      <label for='published'>Comments</label>
      <input type='text' name='comments' id='comments' value='{{ old('comments') }}'>

      <input type='submit' value='Submit'>
  </form>


@endsection
