<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function create()
    {
        return view('lapor_banjir.form');
    }

    public function store(Request $request){
        $request->validate([
            'nama_pelapor'      => 'required|string',
            'lokasi'            => 'required|string',
            'tinggi_genangan'   => 'required|numeric',
            'tanggal_kejadian'  => 'required|date',
        ]);

        Laporan::create([
            'nama_pelapor'      => $request->nama_pelapor,
            'lokasi'            => $request->lokasi,
            'tinggi_genangan'   => $request->tinggi_genangan,
            'tanggal_kejadian'  => $request->tanggal_kejadian,
        ]);

        return view('lapor_banjir.konfirmasi');
    }

    public function index()
    {
        $laporanList = Laporan::all();
        return view('lapor_banjir.index', compact('laporanList'));
    }
}
