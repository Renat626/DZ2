@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/newsAdmin">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/addLocation">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/updateLocation">Update</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  @foreach($new as $item)
  <div class="alert alert-primary" role="alert">
    <h1>{{ $item['headline'] }}</h1>
    <p>{{ $item['text'] }}</p>
        <a href="delete/{{ $item['news_id'] }}">Удалить</a>
  </div>
  @endforeach
@endsection
