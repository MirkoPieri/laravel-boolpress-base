@extends('layoute.welcome')

@section('content')

  <div class="nav">
      <a href="{{route('cat.index')}}">BACK</a>
  </div>


  <div class="container">

      @foreach ($post as $values)
        <div class="box">
          <p><b>Description:</b> {{$values -> text}}</p>
          <p><b>Username:</b> {{$values -> author}}</p>
          <p><b>Date:</b> {{$values -> created_at}}</p>
          <p><b>Category:</b> {{$values -> category_id}}</p><br>
          <a href="{{route('post.edit', $values -> id)}}">EDIT</a>
        </div>
      @endforeach

  </div>

{{-- pagina per aprire singolo post e modificarlo --}}
@endsection
