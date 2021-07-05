@extends('layouts.layout')


@section('content')
    <div class="container" style="background-color:#2E3047; padding:20px">
        @foreach($genres as $genre)
        <h4 style="color: #FFFFFF; margin-bottom: 10px;  margin-top: 20px">{{ $genre->name }}</h4>
        <div class ="card-group">
        @foreach($movies as $movie)
        @if($movie->genre_id == $genre->id)
            <div class="card text-center" style="background-color: #121212; color: #FFFFFF;">
                <img class="card-img-top" src="/{{$movie->photo}}" style="height: 56vh; width:100%">
                <div class="card-body">
                    <h5 class="card-title mb-0">{{$movie->title}}</h5>
                </div>
                <a href='/watch/{{$movie->id}}' class="btn btn-primary" style="background-color:#BB86FC; border-color: #BB86FC">Watch Movie</a>
            </div>
        @endif
        @endforeach
        </div>
        @endforeach
    </div>
@endsection