@extends('contentList')
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <title>J.H.B @yield('title')</title>
    </head>
  <body class="body">
    <main>
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" title="home" href="/home">J.H.B</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="sidenav collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a title="not working" class="nav-link" href=#>About</a></li>
          <li class="nav-item active"><a title="soundcloud link to the Artis" href="https://soundcloud.com/haro-official" class="nav-link">Soundcloud</a></li>
        </ul>
      </div>
    </nav>
  </main>
@section('audioPlayer')
@section('footer')
  </body>
</html>

