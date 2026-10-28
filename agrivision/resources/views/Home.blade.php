@extends('layouts.main')

@section('content')
<div class="text-center py-12">
    <h1 class="text-4xl font-bold text-slate-800 mb-4">
        Selamat Datang di AgriVision Garut – Sistem Deteksi Hama Tanaman Berbasis Computer Vision
    </h1>
    <p class="text-slate-600 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
        Solusi modern pencatatan dan analisis kesehatan tanaman terintegrasi untuk mempercepat pengambilan keputusan pencegahan hama pada lahan pertanian Kabupaten Garut.
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="{{ route('deteksi') }}" class="inline-flex justify-center items-center px-6 py-3 rounded-lg text-white bg-emerald-700 hover:bg-emerald-800 font-semibold transition">
            Mulai Input Deteksi
        </a>
        
        <a href="{{ route('riwayat') }}" class="inline-flex justify-center items-center px-6 py-3 rounded-lg text-emerald-800 bg-emerald-100 hover:bg-emerald-200 font-semibold transition">
            Lihat Riwayat Laporan
        </a>
    </div>
</div>
@endsection
