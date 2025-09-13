<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function home()
    {
        return view("home.home");
    }

    public function materi()
    {
        return view("home.materi");
    }
}
