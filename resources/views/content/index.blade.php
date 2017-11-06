@extends('template.master')

@section('title')

@endsection


@section('content')



  <form action="/action_page.php">
    Definition<br>
    <input type="text" name="firstname" value="">
    <br>
  <textarea class = "ckeditor" name = 'editor'></textarea>
  <input type='submit' name='button' value ='SAVE'>
  </form>


@endsection
