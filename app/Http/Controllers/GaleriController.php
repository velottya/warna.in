<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class GaleriController extends Controller
{

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
    public function galeri($page = null)
    {
        if ($page == 1){
            return view('home.galeri.galeri1');
        } else if ($page == 2){
            return view('home.galeri.galeri2');
        } else if ($page == 3){
            return view('home.galeri.galeri3');
        } else {
            return view('home.galeri.galeri');
        }
    }
}
