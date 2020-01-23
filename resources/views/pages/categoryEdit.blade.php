@extends('layouts.base')

@section('content')

  <form action="{{route('category.update', $category -> id)}}" method="POST" class="categoryEdit">
    @csrf
    @method('POST')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$category -> name}}">
    <label for="description">Description</label>
    <input type="text" name="description" value="{{$category -> description}}">
    
    <input type="submit" value="Aggiorna">
  </form>
    
@endsection