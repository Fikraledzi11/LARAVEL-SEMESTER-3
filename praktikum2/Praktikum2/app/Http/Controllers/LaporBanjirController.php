<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function index() {
        return view('lapor_banjir.form');
    }

    public function store(Request $request) {

        $data = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi' => $request->input('tinggi'),
        ];
        
        return view('lapor_banjir.konfirmasi', $data);
    }
}
