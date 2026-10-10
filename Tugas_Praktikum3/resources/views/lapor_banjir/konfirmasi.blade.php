@extends('layouts.app')

@section('title', 'Konfirmasi')

@section('content')
    <h2>Konfirmasi Pengiriman Laporan</h2>

    <x-alert type="success" message="Laporan kejadian banjir Anda berhasil dikirim ke BPBD." />

    @if($data)
        <div class="card">
            <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
            <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
            <p><strong>Tinggi Air:</strong> {{ $data['tinggi_air'] }} cm</p>
        </div>
    @else
        <p>Tidak ada data laporan yang baru dikirim.</p>
    @endif

    <br>
    <a href="{{ route('lapor.create') }}">Lapor Kembali</a>
@endsection
