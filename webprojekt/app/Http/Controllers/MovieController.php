<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function index()
    {
    $movies = Movie::all();
    return view('movies.index',compact('movies'));
    }

    public function create(){
        return view('movies.create');
    }

    public function store(Request $request)
        {
        $request->validate([
        'title'=>'required',
        'length'=> 'required',
        'description'=> 'required',
        ]);
        Movie::create($request->all());
           return redirect()->route('movies.index');

        }

        public function edit(Movie $movie){
                return view('movies.edit', compact('movie'));
            }

        public function update(Request $request, Movie $movie)
            {
                $request->validate([
                    'title'=>'required',
                    'length'=> 'required',
                    'description'=> 'required'
                ]);
                $movie->update($request->all());
                return redirect()->route('movies.index');
            }

        public function destroy(Movie $movie)
            {
                $movie->delete();
                return redirect()->route('movies.index');
            }   
}
