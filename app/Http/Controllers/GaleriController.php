<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class GaleriController extends Controller
{

    public function galeri($page = null)
    {
        if ($page == 2){
            return view('home.galeri.galeri2');
        }  else if ($page == 3){
            return view('home.galeri.galeri3');
        } else {
            return view('home.galeri.galeri');
        }
    }

    public function adminGaleri()
    {
        return view('admin.galeri');
    }
}
