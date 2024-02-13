<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il Model

use App\Models\Movie;

class PageController extends Controller
{   
    // Questo è un metodo index per restituire la vista della pagina index 
    public function index () {
        // mi salvo tutto (all) quello che mi arriva da Movies nella variabile $movies e lo uso nel Controller
        // con il compact    
        $movies = Movie :: all();
        return view('pages.index', compact('movies')); 
    }
}
