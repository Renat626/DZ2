@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>Delet news</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories">Categories</a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
  <form action="{{ route('delete') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="news">news</label>
      <select class="form-control" name="news" id="news">
        @foreach($news as $value)
          <option value="{{ $value->news_id }}">{{ $value->headline }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
