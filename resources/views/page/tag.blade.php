@extends('layoute.welcome')

@section('content')

    <div class="nav">
        <a href="{{route('cat.index')}}">BACK</a>
    </div>

  <div class="container">
    <h1>Tags List</h1>
      @foreach ($tag as $values)
        <div class="box">
          <p><b>Title:</b> {{$values -> title}}</p>
          <p><b>Text:</b> {{$values -> text}}</p><br>
          <a href="{{route('tag.show', $values -> id )}}">APRI</a>
        </div>
      @endforeach

  </div>

{{-- visualizzazione post per categoria --}}
@endsection
