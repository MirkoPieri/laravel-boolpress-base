@extends('layoute.welcome')

@section('content')

  <div class="nav">
      <a href="{{route('cat.index')}}">BACK</a>
  </div>


  <div class="container">

      <div class="edit">
        <form method="post" action="{{ route('post.update', $post -> id )}}"
                method="post"
                accept-charset="UTF-8"
                enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="text">Text</label>
            <input type="text" name="text" value="{{ $post -> text }}">
          </div>

          <input type="file" name="img" accept="image/*"><br><br>

          <button type="submit">Save</button>
        </form>
      </div>

  </div>

{{-- pagina per modificare singolo post --}}
@endsection
