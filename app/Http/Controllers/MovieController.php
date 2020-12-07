<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.index', [
            'movie' => $this->getMovies(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'company_id' => ['required'],
            'title' => ['required'],
            'year' => ['required'],
            'excerpt' => ['required'],
            'last_watched_at' => ['required'],
            'times_watched' => ['required'],
            'average_rating' => ['required'],
        ]);

        $movie = new Movie();

        $movie->unsignedbigInteger('company_id');
        $movie->string('title');
        $movie->unsignedSmallInteger('year');
        $movie->text('excerpt');
        $movie->timestamp('last_watched_at');
        $movie->unsignedSmallInteger('times_watched')->default(0);
        $movie->float('average_rating')->default(1);

        $movie->save();

        return redirect('/movies');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {

        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }

    public function getMovies(): array
    {
        $movies = Movie::all();

        $result = [];

        foreach ($movies as $movie) {
            $result[] = $movie;
        }

        return $result;
    }
}
