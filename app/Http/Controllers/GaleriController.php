<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri()
    {
        return view('home.galeri.galeri');
    }
    public function galeri1()
    {
        return view('home.galeri.galeri1');
    }
    public function galeri2()
    {
        return view('home.galeri.galeri2');
    }
    public function galeri3()
    {
        return view('home.galeri.galeri3');
    }
}
