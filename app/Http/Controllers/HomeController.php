<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $hyper = config('my-menu.menu');
        $comics = Comic::inRandomOrder()->limit(5)->get();
        return view('home', compact('hyper', 'comics'));
    }
}
