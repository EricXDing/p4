@extends('template.master')

@section('title')

@endsection


@section('content')

  <form method='POST' action='/storeperson'>

      {{ csrf_field() }}

      * Required fields

      <label for='Name'>* Name</label>
      <input type='text' name='name' id='name' value='{{ old('name=""') }}'>


      <label for='email'>* Email</label>
      <input type='text' name='email' id='email' value='{{ old('email') }}'>


      <label for='published'>Comments</label>
      <input type='text' name='comments' id='comments' value='{{ old('comments') }}'>


      <input type='submit' value='Submit'>
  </form>


@endsection
