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

    // public function adminGaleri()
    // {
    //     return view('admin.galeri');
    // }

    public function adminGaleri()
    {
        $galeri = Galeri::all(); // Mengambil semua data galeri dari database

        return view('admin.galeri', compact('galeri')); // Mengirim data galeri ke tampilan 'admin.galeri'
    }

    // public function edit($id)
    // {
    //     // Mengambil data galeri berdasarkan ID
    //     $galeri = Galeri::findOrFail($id);

    //     // Mengembalikan view form edit bersama dengan data galeri yang akan diubah
    //     return view('edit', compact('galeri'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'judul' => 'required|string|max:255',
    //         'deskripsi' => 'required|string',
    //         'timestamp' => 'required|string',
    //     ]);

    //     // Simpan gambar ke direktori tertentu
    //     $imageName = time().'.'.$request->gambar->extension();
    //     $request->gambar->move(public_path('images'), $imageName);

    //     // Ambil data galeri berdasarkan ID
    //     $galeri = Galeri::findOrFail($id);

    //     // Update data galeri
    //     $galeri->update([
    //         'gambar' => $imageName,
    //         'judul' => $request->judul,
    //         'deskripsi' => $request->deskripsi,
    //         'timestamps' => $request->timestamp,
    //     ]);

    //     // Redirect kembali dengan pesan sukses
    //     return redirect()->back()->with('success','Galeri berhasil diperbarui.');
    // }

    // public function destroy($id)
    // {
    //     // Cari data galeri berdasarkan ID
    //     $galeri = Galeri::findOrFail($id);

    //     // Hapus galeri
    //     $galeri->delete();

    //     // Redirect kembali dengan pesan sukses
    //     return redirect()->back()->with('success','Galeri berhasil dihapus.');
    // }

    // public function edit(Galeri $galeri)
    // {
    //     // Kode untuk menampilkan form edit galeri
    // }

    // public function destroy(Galeri $galeri)
    // {
    //     $galeri->delete();
    //     return redirect()->back()->with('success', 'Galeri berhasil dihapus.');
    // }

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
