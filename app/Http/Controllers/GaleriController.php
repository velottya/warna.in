<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Galeri;


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

    public function tambahGaleri(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'timestamp' => 'required|string',
        ]);

        // Simpan gambar ke direktori tertentu
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Simpan data ke database
        Galeri::create([
            'gambar' => $imageName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'timestamps' => $request->timestamp,
        ]);

        return redirect()->back()->with('success','Galeri berhasil ditambahkan.');
    }
}
