<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Resources\MovieResource;

class MovieController extends Controller
{
    //
    public function index()
    {
        $movies=Movie::all();
        return MovieResource::collection($movies);
    }
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }
    public function destroy(Movie $movie){
            $movie->delete();
            return new MovieResource($movie);
          }

    public function store(Request $request)
   {
   $movie1 = new Movie([
   'title' => $request->input('title'),
   'length'=> $request->input('length'),
   'description'=> $request->input('description'),
   ]);

   $movie1->save();
   return new MovieResource($movie1);
   }
}
