@extends('layoute.welcome')

@section('content')

    <div class="nav">
      @foreach ($category as $value)
        <a href="#">{{$value -> name}}</a>
      @endforeach
    </div>

  <div class="container">

      @foreach ($post as $values)
        <div class="box">
          <p><b>Description:</b> {{$values -> text}}</p>
          <p><b>Username:</b> {{$values -> author}}</p>
          <p><b>Date:</b> {{$values -> created_at}}</p>
          <p><b>Category:</b> {{$values -> category_id}}</p><br>
        </div>
      @endforeach

  </div>


@endsection
