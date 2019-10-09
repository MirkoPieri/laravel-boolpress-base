@extends('layoute.welcome')

@section('content')

  <div class="nav">
      <a href="{{route('cat.index')}}">BACK</a>
  </div>


  <div class="container">

        <div class="box">
          <p><b>Description:</b> {!!$post -> text!!}</p>
          <p><b>Username:</b> {{$post -> author}}</p>
          <p><b>Date:</b> {{$post -> updated_at}}</p>
          <p><b>Category:</b> {{$post -> category_id}}</p><br>
          <a href="{{route('post.edit', $post -> id)}}">EDIT</a>
        </div>

        <h1>Tags List</h1>
      @foreach ($post -> tags as $tag)
        <div class="box">
          <p><b>Title:</b> {{$tag -> title}}</p>
          <p><b>Text:</b> {{$tag -> text}}</p><br>
        </div>
      @endforeach

    {{-- $post -> tags per prendere i tag associati a quel post --}}

  </div>

{{-- pagina per aprire singolo post e modificarlo --}}
@endsection
