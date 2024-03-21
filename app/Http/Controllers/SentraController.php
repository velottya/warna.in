<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SentraController extends Controller
{
    public function sentra($page = null)
    {
        if ($page == 'kegiatan'){
            return view('home.sentra.sentra1');
        } else if ($page == 'produk'){
            return view('home.sentra.sentra2');
        } else {
            return view('home.sentra.sentra');
        }
    }
    
        
}
