@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h1>Admin</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/addLocation">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/updateLocation">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/newsAdmin">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/updateUserLocation">change data of profile</a>
      </li>
    </ul>
  </div>
</nav>
@endsection
