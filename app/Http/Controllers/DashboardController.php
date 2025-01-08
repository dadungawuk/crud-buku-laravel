<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jmlKategori' => Kategori::count(),
            'jmlPenerbit' => Penerbit::count(),
            'jmlSemuaBuku' => Buku::count(),
            'jmlAnggota' => Anggota::count(),
        ];

        $kategori = Kategori::withCount('bukus')->get();
        // dd($kategori);
        $namaKategori = $kategori->pluck('nama_kategori')->toArray();
        // dd($namaKategori);
        $jumlahBuku = $kategori->pluck('bukus_count')->toArray();

        return view('welcome', compact('data', 'namaKategori', 'jumlahBuku'));
    }
}
