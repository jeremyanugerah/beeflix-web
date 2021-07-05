<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use App\Episode;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexHome()
    {
        $movies = Movie::all();
        $genres = Genre::all();

        return view('home', compact('movies', 'genres'));
    }

    public function indexWatch($id)
    {
        $movie = Movie::all()->find($id);
        $genre = Genre::all()->find($movie->genre_id);
        $movie->episodes = $movie->episodes->toQuery()->paginate(3); 
        return view('watch', ['movie' => $movie, 'genre' => $genre]);
    }

    public function indexGenre($id)
    {
        $genre = Genre::all()->find($id);
        return view('genre', ['genre' => $genre]);
    }

    /**
     * Show the form for creating a new resource.
     * return view('watch', ['movie' => $movie, 'genre' => $genre]);
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
