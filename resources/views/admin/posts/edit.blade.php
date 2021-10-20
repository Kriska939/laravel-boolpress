@extends('layouts.app')

@section('content')

<div class="container">
    <header>
        <h1>Modifica post</h1>
    </header>
    <section id="form">
        <form method="POST" action="{{ route('admin.posts.update', $post->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="exampleFormControlInput1">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" >
            </div>
            <div class="form-group">
              <label for="content">Contenuto del post</label>
              <textarea class="form-control" id="content" name="content" rows="5">{{$post->title}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
              </div>

              <button type="submit" class="btn btn-success">Pubblica</button>
          </form>
    </section>
</div>
@endsection