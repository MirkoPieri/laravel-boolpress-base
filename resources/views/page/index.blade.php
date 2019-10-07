@extends('layoute.welcome')

@section('content')

  @foreach ($category as $value)
    <a href="#">{{$value -> name}}</a>
  @endforeach

  @foreach ($post as $values)
    <p><b>Description:</b> {{$values -> text}}</p>
    <p><b>Username:</b> {{$values -> author}}</p>
    <p><b>Date:</b> {{$values -> created_at}}</p><br>

  @endforeach

@endsection
