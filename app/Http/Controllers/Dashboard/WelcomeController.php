<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use App\Movie;
use App\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        
        $users_count = User::whereRole('user')->count();
        $categories_count = Category::count();
        $movies_count = Movie::count();

        return view('dashboard.welcome', compact('users_count', 'categories_count', 'movies_count'));
 
    }
}
