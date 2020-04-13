@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>News</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories">Categories</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  @forelse($news as $value)
    <div class="alert alert-primary" role="alert">
      <a href="news/{{ $value->news_id }}">{{ $value->headline }}</a>
    </div>
  @empty
    <div class="alert alert-primary" role="alert">
      <p>Новостей нет</p>
    </div>
  @endforelse
  {{ $news->links() }}
@endsection
