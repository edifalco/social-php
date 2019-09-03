<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Movie;
use App\Http\Resources\Movie as MovieResource;

class MovieController extends Controller
{
  public function index()
  {
    //Get movies
    $movies = Movie::all();

    //Return the collection of movies as a resource
    return MovieResource::collection($movies);
  }

  public function addmovie($title, $release_year)
  {
    $movie = Movie::where('title', $title)->first();

    if($movie != NULL) {
      return "Error: We were not able to create the movie '" . $title . "' because it is already in our DB.";
    } else {
      $movie = Movie::create([
        'title'=>$title,
        'release_year'=>$release_year
      ]);

      return "The movie '" . $title . "' has been sucessfully added to our DB.";
    }
  }

  public function removemovie($title)
  {
    //Get Article
    $movie = Movie::where('title', '=', $title)->first();

    if($movie != NULL) {
        $movie->delete();
        return "The movie '". $title ."' has been deleted from the DB.";
      } else {
        return "Error: There is no movie with the title '" . $title . "'";
      }
  }
}
