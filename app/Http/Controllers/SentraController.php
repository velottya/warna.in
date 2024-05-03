<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        // $product = Product::all();

        $data = 
        [
            'category'=>Category::orderBy('name', 'asc')->get(),
            'product'=>Product::all()
        ];
        return view('admin.sentra', $data);
    }

    public function tambahSentra(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description',
            'picture' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
        ];
        
        // Simpan gambar ke direktori tertentu
        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('images/product'), $imageName);

        // Simpan data ke database
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'picture' => $imageName,
            'price' => $request->price,
            'stock' => $request->stock,
            'category' => $request->category,

            'category_id' => $request->category,
        ]);
        return redirect()->back()->with('success','Galeri berhasil ditambahkan.');


        // $validator = Validator::make($request->all(), $rules);

        // if ($validator-> passes()) {

        // } else {
        //     return response()-> json([
        //         'status' => false,
        //         'errors' => $validator->errors()
        //     ]);
        // }
    }

    public function deleteSentra($id)
    {
        // Find the resource by its ID
        $product = Product::findOrFail($id);

        // Delete the resource
        $product->delete();

        // Redirect or provide a response as needed
        return redirect()->back()->with('success', 'Product berhasil dihapus');
    }
}
