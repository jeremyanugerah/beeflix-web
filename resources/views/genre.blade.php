@extends('layouts.layout')
@section('navbar')
<nav class="navbar navbar-expand navbar-dark" style="background-color: #2D2D44">
    <h1 class="navbar-brand mb-0">BEEFLIX</h1>
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link" href="{{url('')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('genre/1')}}">Drama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('genre/2')}}">Kids</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('genre/3')}}">TV Show</a>
      </li>
    </ul>
    <form class="form-inline">
</nav>
@endsection

@section('content')
<div class="container">
<h4 style="color: #FFFFFF; margin-bottom: 10px;  margin-top: 20px">{{ $genre->name }}</h4>
    <div class="card-group">
    @foreach($genre->movies as $movie)
        <div class="card text-center" style="background-color: #2E3047; color: #FFFFFF;">
            <img class="card-img-top" src="/{{$movie->photo}}" style="height: 60vh; width:100%">
            <div class="card-body">
                <h5 class="card-title mb-0">{{$movie->title}}</h5>
            </div>
            <a href='/watch/{{$movie->id}}' class="btn btn-primary" style="background-color:#BB86FC; border-color: #BB86FC">Watch Movie</a>
        </div>
    @endforeach
    </div>
</div>
@endsection