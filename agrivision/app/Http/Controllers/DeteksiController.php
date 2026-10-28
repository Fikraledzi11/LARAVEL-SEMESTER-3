<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeteksiHama;

class DeteksiController extends Controller
{
    public function prosesData(Request $request)
    {
        $validated = $request->validate([
            'lokasi' => 'required',
            'nama_tanaman' => 'required',
            'jenis_hama' => 'required',
            'confidence_score' => 'required|numeric',
            'tingkat_kerusakan' => 'required|numeric',
        ]);

        $score = $validated['confidence_score'];

        if ($score < 50) {
            $status = 'Tidak Pasti';
            $rekomendasi = 'Perlu verifikasi manual oleh petugas';
        } elseif ($score <= 80) {
            $status = 'Indikasi Hama';
            $rekomendasi = 'Lakukan pemantauan intensif';
        } else {
            $status = 'Hama Terkonfirmasi';
            $rekomendasi = 'Segera lakukan pengendalian hama';
        }

        $deteksi = new DeteksiHama();
        $deteksi->setTable('deteksi_hama');
        $deteksi->lokasi = $validated['lokasi'];
        $deteksi->nama_tanaman = $validated['nama_tanaman'];
        $deteksi->jenis_hama = $validated['jenis_hama'];
        $deteksi->confidence_score = $score;
        $deteksi->tingkat_kerusakan = $validated['tingkat_kerusakan'];
        $deteksi->status_deteksi = $status;
        $deteksi->rekomendasi = $rekomendasi;
        $deteksi->save();

        return view('hasil', compact('deteksi'));
    }

    public function riwayat()
    {
        $riwayat = DeteksiHama::latest()->get();
        return view('riwayat', compact('riwayat'));
    }
}
