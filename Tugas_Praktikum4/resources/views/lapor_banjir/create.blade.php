@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Laporan Kejadian Banjir</h2>
    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Pelapor:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Lokasi Kejadian:</label>
            <input type="text" name="lokasi" required>
        </div>
        <div class="form-group">
            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_air" required>
        </div>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection
