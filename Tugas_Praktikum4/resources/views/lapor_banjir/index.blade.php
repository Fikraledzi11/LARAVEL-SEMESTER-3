@extends('layouts.app')

@section('content')
<h2>Daftar Laporan Kejadian Banjir</h2>

<a href="{{ route('lapor_banjir.create') }}">+ Tambah Laporan Baru</a>
<br><br>

@forelse($laporanList as $laporan)
    @include('partials.laporan-card', ['laporan' => $laporan])
@empty
    <p>Belum ada laporan banjir yang tersimpan.</p>
@endforelse

@endsection
