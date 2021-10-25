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
              <div class="form-group">
                <label for="category_id">Seleziona Categoria</label>
                <select class="form-control" id="category:id" name="category_id">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>

              <h3>Tags</h3>
              @foreach($tags as $tag)
                
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id}}" value="{{ $tag->id}}" name="tags[]" @if (in_array($tag->id, old('tags', $tagIds ? $tagIds : []))) checked @endif>
                <label class="form-check-label" for="tag-{{ $tag->id}}">{{ $tag->name}}</label>
              </div>

              @endforeach
            

              <!-- BOTTONE FINALE DEL FORM-->
              <div><button type="submit" class="btn btn-success my-3">Pubblica</button></div>
          </form>
    </section>
</div>
@endsection