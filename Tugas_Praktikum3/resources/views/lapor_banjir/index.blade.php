@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir Terkini</h2>

    @forelse($laporans as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan kejadian banjir saat ini.</p>
    @endforelse
@endsection
