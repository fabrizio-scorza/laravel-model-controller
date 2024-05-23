<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //funzione per la vista home
    public function home()
    {
        return view('homepage');
    }
    public function movies()
    {
        // collego dal model movie la tabella movies in una variabile
        $movies = Movie::all();

        // ritorno la vista e i dati
        return view('movies', compact('movies'));
    }
}
