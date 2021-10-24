@extends('layouts.app')

@section('content')

<div class="container">
  @if(session('alert-message'))
  <div class="alert alert-{{ session('alert-type')}}">
    {{ session('alert-message')}}
  </div>
  @endif
  <header class="my-5 d-flex justify-content-between align-items-center">
    <h1>Posts</h1>
    <a href="{{ route('admin.posts.create')}}" class="btn btn-success">Crea Nuovo</a>
  </header>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Data di pubblicazione</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            @forelse($posts as $post)
                
            <tr>
                <td>{{$post->title}}</td>
                <td>@if($post->category)
                  <span class="badge badge-pill badge-dark px-3">
                  {{$post->category->name}}</span>
                @else - 
                @endif
                </td>
                <td>{{$post->created_at}}</td>
                <td class="d-flex justify-content-end">
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Apri</a>
                    <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning ml-2">Modifica</a>
                    <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                   <button type="submit" class="btn btn-danger ml-2">Elimina</button>
                    </form>
                </td>
              </tr>

            @empty
            <tr><td colspan="3" class="text-center">Nessun Post Trovato</td></tr>
              
            
            @endforelse
         
        </tbody>
      </table>
      <footer class="d-flex justify-content-end">
        {{$posts->links()}}
      </footer>
</div>
@endsection