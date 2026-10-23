@extends('layouts.app')

@section('content')
<h2>Form Pelaporan Banjir</h2>

<form action="{{ route('laporan.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama Pelapor:</label><br>
        <input type="text" name="nama_pelapor" required><br><br>
    </div>
    <div>
        <label>Lokasi (Kecamatan):</label><br>
        <input type="text" name="lokasi" required><br><br>
    </div>
    <div>
        <label>Tinggi Genangan (cm):</label><br>
        <input type="number" name="tinggi_genangan" required><br><br>
    </div>
    <div>
        <label>Tanggal Kejadian:</label><br>
        <input type="date" name="tanggal_kejadian" required><br><br>
    </div>
    <button type="submit">Kirim Laporan</button>
</form>
@endsection
