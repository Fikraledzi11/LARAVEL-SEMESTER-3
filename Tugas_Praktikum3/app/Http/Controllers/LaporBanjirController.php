<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function index()
    {
        $laporans = [
            ['nama' => 'Asep Sutisna', 'lokasi' => 'Bojongsoang', 'tinggi_air' => 25],
            ['nama' => 'Siti Nurhaliza', 'lokasi' => 'Dayeuhkolot', 'tinggi_air' => 50],
            ['nama' => 'Budi Santoso', 'lokasi' => 'Baleendah', 'tinggi_air' => 85],
        ];
        return view('lapor_banjir.index', compact('laporans'));
    }

    public function create()
    {
        return view('lapor_banjir.create');
    }

    public function store(Request $request)
    {

        $data = $request->only(['nama', 'lokasi', 'tinggi_air']);
        return redirect()->route('lapor.konfirmasi')->with('data_laporan', $data);
    }

    
    public function konfirmasi()
    {

        $data = session('data_laporan');
        return view('lapor_banjir.konfirmasi', compact('data'));
    }
}
