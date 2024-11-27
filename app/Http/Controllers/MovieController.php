<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    //
    public function MovieList()
    {
        $movies = Movie::paginate(4);
        return view('home', ['movies'=>$movies]);
    }

    public function Create(){
        $genres = Genre::all();
        return view('create', ['genres'=>$genres]);
    }

    public function Store(Request $request){
        $validated = $request->validate([
            'genre'=>'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg|max:5000',
            'title' => 'required|max:30',
            'desc' => 'required|max:50',
            'date'=>'required|before:today'
        ]);

        $movie = new Movie();
        $movie->genre_id = $request->genre;
        $movie->title = $request->title;
        $movie->photo = $request->photo;
        $movie->publish_date = $request->date;
        $movie->description = $request->desc;
        $movie->save();
        return back()->with('success', true);
    }

    public function Delete($id){
        Movie::where('id', $id)->delete();
        return redirect('/')->with('success', 'Movie Deleted!');
    }
}
