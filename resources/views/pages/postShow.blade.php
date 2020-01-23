@extends('layouts.base')

@section('content')

  <div class="postShow">
    
    <h4>Categoria: {{$post -> category -> name}}</h4>
    <p>{{$post -> category -> description}}</p>
  
    <h2>{{$post -> title}}</h2>
    <p>{{$post ->body}}</p>
    <span>
    <a href="{{route('post.edit', $post -> id)}}">Edit</a>
    <a href="{{route('post.delete', $post -> id)}}">Delete</a>
    </span>
  </div>
    
@endsection