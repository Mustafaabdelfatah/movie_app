<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Movie;
 
class WelcomeController extends Controller
{

 
    public function index()
    {
    
        
        // foreach(cat::get() as $cat){
        //     foreach($cat->movies as $moive){
                
        //     }
        // }
        $latest_movies = Movie::latest()->limit(5)->get();
        $categories = Category::with('movies')->get();

        
        return view('welcome', compact('latest_movies','categories'));

    }// end of index
}
