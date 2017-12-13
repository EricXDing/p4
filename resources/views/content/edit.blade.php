@extends('template.master')

@section('title')

@endsection


@section('content')

Update {{ $person->name}}'s Information

  <form method='POST' action='/{{ $person->id }}/edit'>
      {{  method_field('put') }}
      {{ csrf_field() }}

      <!-- * Required fields -->
      <label for='Name'>* Name</label>
      <input type='text' name='name' id='name' value='{{ old('name', $person->name) }}'>
      <label for='email'>* Email</label>
      <input type='text' name='email' id='email' value='{{ old('email', $person->email) }}'><br>

@foreach ($relationships as $id => $type)
      <input
          type="checkbox"
          name="relationships[]"
          {{ (in_array($type, $CurrentRelationships)) ? 'CHECKED' : ''  }}
          value="{{ $id }}">{{ $type }}<br>
@endforeach

      <label for='published'>Comments</label>
      <input type='text' name='comments' id='comments' value='{{ old('comments', $person->comments) }}'>

      <input type='submit' value='save changes'>
  </form>


@endsection
