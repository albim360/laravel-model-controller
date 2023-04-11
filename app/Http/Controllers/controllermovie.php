<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class moviecontroller extends Controller
{
    public function movieList() {
        $movies = Movie::all();

        return view('movie-list', compact('movies'));
    }
}