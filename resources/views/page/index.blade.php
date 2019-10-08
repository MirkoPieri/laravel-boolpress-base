@extends('layoute.welcome')

@section('content')
    <div class="create">
      <a href="{{route('post.create')}}">CREATE NEW POST</a>
    </div>
    <div class="nav">
      @foreach ($category as $value)
        <a href="{{ route('cat.show', $value -> id )}}">{{$value -> name}}</a>
      @endforeach
    </div>

  <div class="container">

      @foreach ($post as $values)
        <div class="box">
          <p><b>Description:</b> {{$values -> text}}</p>
          <p><b>Username:</b> {{$values -> author}}</p>
          <p><b>Date:</b> {{$values -> updated_at}}</p>
          <p><b>Category:</b> {{$values -> category_id}}</p><br>
          <a href="{{route('post.show', $values -> id )}}">APRI</a>
          <a href="{{ route('post.destroy', $values -> id) }}">DELETE</a>
        </div>
      @endforeach

  </div>


@endsection
