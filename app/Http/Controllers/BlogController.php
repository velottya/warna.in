<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog($page = null)
    {
        if ($page == 1){
            return view('home.blog.blog1');
        }  else if ($page == 2){
            return view('home.blog.blog2');
        } else {
            return view('home.blog.blog');
        }
    }
}
