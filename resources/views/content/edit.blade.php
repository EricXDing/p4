@extends('template.master')

@section('title')

@endsection

@section('content')

Update {{ $person->name}}'s Information
  <form class='form' method='POST' action='/{{ $person->id }}'>
    {{  method_field('put') }}
    {{ csrf_field() }}
    * Required fields
    <div id ='error'>
      @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
      @endif
    </div>
    <label for='name'>Name*</label>
    <input type='text' name='name' id='name' value='{{ old('name', $person->name) }}'>
    <label for='email'>Email*</label>
    <input type='text' name='email' id='email' value='{{ old('email', $person->email) }}'>
    <div id = 'checkbox'>
      @foreach ($relationships as $id => $type)
        <input
            type="checkbox"
            name="relationships[]"
            {{ (in_array($type, $CurrentRelationships)) ? 'CHECKED' : ''  }}
            value="{{ $id }}">{{ $type }}<br>
      @endforeach
    </div>
    <label for='comments'>Comments*</label>
    <input type='text' name='comments' id='comments' value='{{ old('comments', $person->comments) }}'>
    <input type='submit' value='save changes'>
  </form>

@endsection
