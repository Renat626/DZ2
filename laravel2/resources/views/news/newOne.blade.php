@extends('layouts.main')

@section('title')
  {{ $new->headline }}
@endsection

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>{{ $new->headline }}</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  <div class="alert alert-primary" role="alert">
    <h1>{{ $new->headline }}</h1>
    <p>{{ $new->text }}</p>
  </div>
@endsection
