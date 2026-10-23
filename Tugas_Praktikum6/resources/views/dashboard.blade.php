@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-success text-white">Dashboard Laporan Banjir</div>
    <div class="card-body">
        <h5>Selamat datang, {{ Auth::user()->name }}!</h5>
        <p>Anda telah berhasil login. Halaman ini berisi daftar laporan banjir (khusus petugas).</p>
    </div>
</div>
@endsection
