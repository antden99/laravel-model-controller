<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //dd($movies); //con il dd controllo che praticamente ho salvato tutti i movies nella variabile dichiarata, perche ::all() equilave a fare select * FROM `movies`

        return view('home', compact('movies'));     //con questo controllo io reindirizzo il controllo alla pagina welcome
    }

    public function features()
    {

        return view('features');     
    }

    public function pricing()
    {


        return view('pricing');    
    }
}
