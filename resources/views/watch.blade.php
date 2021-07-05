@extends('layouts.layout')

@section('style')
<style>
    .Stars::before{
    content: '★★★★★';
    background: linear-gradient(90deg, orange var(--percent), rgb(225, 225, 225) var(--percent));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
    .Stars {
        --percent: calc(var(--rating) / 5 * 100%);

        display: inline-block;
        font-size: 30px;
        font-family: Times;
        line-height: 1;
    }
</style>
@endsection


@section('content')
    <div class="container">
        <div class="jumbotron mt-4 p-5">
            <div class ="row">
                <div class="col-4">
                    <img src="/{{$movie->photo}}" style="height: 70vh; width:22.5vw">
                </div>
                
                <div class="col-4">
                    <h2 style="margin-top: 15px"> {{$movie->title}}</h2>
                    <div>
                    <span class="Stars align-middle" style="--rating: {{$movie->rating}};"></span>
                    <span class="align-middle">{{$movie->rating}}/5.0</span>
                    </div>
                    <p style="margin-top: 20px">
                    {{$movie->description}}
                    </p>

                    <p style="margin-top: 20px">
                    Category: <a href="/genre/{{$genre->id}}"> {{$genre->name}} </a>
                    </p>

                </div>

                <div class="col-4">
                    <table class="table table-sm table-hover table-bordered table-light">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($movie->episodes as $episode)
                        <tr>
                            <td>{{ $episode->episode }}</td>
                            <td>{{$episode->title}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    {{ $movie->episodes->links() }}
                </div>
            </div>


        </div>
    </div>
@endsection

