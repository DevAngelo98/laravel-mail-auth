@extends('layouts.base')

@section('content')
  @foreach ($categories as $category)
      <div class="category">
        <h4>Categoria: {{$category -> name}}</h4>
        <span>
      
          @if(Auth::check())
          <a href="{{route('category.edit', $category -> id)}}">Edit</a>
          @else
          <p>Non puoi modificare perchè non loggato</p>
          @endif

          @if(Auth::check())
          <a href="{{route('category.delete', $category -> id)}}">Delete</a>
          @else
          <p>Non puoi eliminare perchè non loggato</p>
          @endif
          
        {{-- <a href="@auth{{Auth::user()}}{{route('category.edit', $category -> id)}}@else#@endauth">Edit</a> --}}
        
        </span>
        <p>{{$category -> description}}</p>
        <div class="posts">
          @foreach ($category -> posts as $post)

          <div class="post">
            @if(Auth::check())
            <a href="{{route('post.show', $post -> id) }}">
              <p>{{$post->title}}</p>
            </a>
            @else
            <p>{{$post->title}}</p>
            @endif
          </div>
         @endforeach
        </div>
        
      </div>
  @endforeach
@endsection 