@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center my-5">Posts</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Data di pubblicazione</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            @forelse($posts as $post)
                
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Apri</a>
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