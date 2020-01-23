<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{mix  ('css/app.css')}}">
  <title>Blog</title>
</head>
<body>
  <header class="my_head">
    <a href="{{route('home.index')}}">
      <h1>
        Blog
        @auth
        {{Auth::user() -> name}}
        @else
        <p>(GUEST)</p>
        <a href="{{ route('login') }}">Login</a> <br>
        <a href="{{ route('register') }}">Register</a>
        @endauth
      </h1>
    </a>
  
    
  </header>
  @yield('content')
  <footer>
    <h5>Footer...</h5>
  </footer>
</body>
</html>

