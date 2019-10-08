@extends('layoute.welcome')

@section('content')

  <div class="nav">
      <a href="{{route('cat.index')}}">BACK</a>
  </div>


  <div class="container">

      <div class="edit">
        <form method="post" action="{{route('post.store')}}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="text">Text</label>
            <input type="text" name="text" value="">
          </div>

          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" value="">
          </div>

          <div class="form-group">
            <label for="category_id">Author</label>
            <select class="select" name="category_id">
              @foreach ($category as $value)
                <option value="{{$value -> id}}">{{$value -> name}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

  </div>

{{-- pagina per creare nuovo post --}}
@endsection
