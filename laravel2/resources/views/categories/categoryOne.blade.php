@extends('layouts.main')

@section('title')
  {{ $categories->category }}
@endsection

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>{{ $categories->category }}</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/news">News</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  @foreach($news as $value)
    @if ($value->category == $category_id)
      <div class="alert alert-primary" role="alert">
        <h1>{{ $value->headline }}</h1>
        <p>{{ $value->text }}</p>
      </div>
    @endif
  @endforeach
@endsection
