<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Main()
    {

        return view('index',['posts'=>\App\Post::paginate(10)]);
    }

    public function About(){
        return view('about');
    }
}
