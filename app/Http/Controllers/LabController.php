<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\lab;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class LabController extends Controller
{
    public function lab()
    {
    $lab = lab::all();
    return view('home.lab.lab', ['lab' => $lab]);
    }

    public function adminlab()
    {
        $lab = lab::all(); // Mengambil semua data lab dari database
        return view('admin.lab', compact('lab')); // Mengirim data lab ke tampilan 'admin.lab'
    }

    public function destroy($id)
    {
        // Find the resource by its ID
        $lab = lab::findOrFail($id);

        // Delete the resource
        $lab->delete();

        // Redirect or provide a response as needed
        return redirect()->back()->with('success', 'lab berhasil dihapus');
    }

    public function tambahlab(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            // 'timestamp' => 'required|string',
        ]);

        // Simpan gambar ke direktori tertentu
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Simpan data ke database
        lab::create([
            'gambar' => $imageName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            // 'timestamps' => $request->timestamp,
        ]);

        return redirect()->back()->with('success','lab berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan data lab berdasarkan ID
        $lab = lab::findOrFail($id);

        // Tampilkan halaman edit dengan data yang akan diedit
        return view('lab.edit', compact('lab'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diinput
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk file gambar
        ]);

        // Temukan data lab berdasarkan ID
        $lab = lab::findOrFail($id);

        // Update data lab dengan data yang baru
        $lab->judul = $request->judul;
        $lab->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Ambil file gambar yang diunggah
            $gambar = $request->file('gambar');

            // Ubah gambar menjadi blob
            $gambarBlob = file_get_contents($gambar->getRealPath());

            // Simpan gambar sebagai blob di dalam kolom gambar di tabel lab
            $lab->gambar = $gambarBlob;
        }

        // Simpan perubahan pada data lab
        $lab->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data lab berhasil diperbarui');
    }

    public function user($page = null)
    {
        // $lab = lab::all(); // Mengambil semua data lab dari database
        // Jumlah lab per halaman

        $lab = lab::all();

        if ($page == 2) {
            return view('home.lab.lab2', compact('lab'));
        } elseif ($page == 3) {
            return view('home.lab.lab3', compact('lab'));
        } else {
            return view('home.lab.lab', compact('lab'));
        }
    }
}
