@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <h5>Categoria: @if($post->category){{$post->category->name}} @else nessuna @endif</h5>
    <p>{{$post->content}}</p>
    <address>{{$post->created_at}}</address>
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.posts.index')}}" class="btn btn-secondary">Torna ai post</a>
    </div>
</div>
@endsection