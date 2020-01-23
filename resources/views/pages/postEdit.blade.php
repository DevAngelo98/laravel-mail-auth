@extends('layouts.base')

@section('content')

  <form action="{{route('post.update', $post -> id)}}" method="POST" class="postEdit">
    @csrf
    @method('POST')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post -> title}}">
    <label for="body">Body</label>
    <input type="text" name="body" value="{{$post -> body}}">
    
    <input type="submit" value="Aggiorna">
  </form>
    
@endsection