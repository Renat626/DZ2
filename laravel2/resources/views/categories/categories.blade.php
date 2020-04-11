@extends('layouts.main')

@section('title')
  Categories
@endsection

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>Categories</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="categories">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news">News</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  @forelse($categories as $value)
    <div class="alert alert-primary" role="alert">
      <a href="categories/{{ $value->id }}">{{ $value->category }}</a>
    </div>
  @empty
    <div class="alert alert-primary" role="alert">
      <p>Категорий нет</p>
    </div>
  @endforelse
@endsection
