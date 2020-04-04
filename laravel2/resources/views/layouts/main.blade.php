<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@section('title')@show</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      @section('headline')@show
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            @section('a1')@show
          </li>
          <li class="nav-item">
            @section('a2')@show
          </li>
          <li class="nav-item">
            @section('a3')@show
          </li>
          <li class="nav-item">
            @section('a4')@show
          </li>
          <li class="nav-item">
            @section('a5')@show
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')
  </body>
</html>
