<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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



    public function cart($page)
    {
        return view('home.sentra.addcart');
    }

    public function cekout($page)
    {
        return view('home.sentra.cekout');
    }

    public function bayar($page, $productName)
    {
        return view('home.sentra.form-bayar', ['productName' => $productName]);
    }
    



    // Nyambung ke admin
    public function adminPembayaran()
    {
        return view('admin.verifikasiBayar');
    }
    public function adminSentra()
    {
        return view('admin.sentra');
    }
    // public function addProduct(Request $request){
    //     $data = [
    //         'pageTitle' => 'Add Product',
    //         'categories' => Categories::orderBy('name', 'asc')->get()
    //     ];
    //     return view('admin.sentra', $data);

    // }
        
}
