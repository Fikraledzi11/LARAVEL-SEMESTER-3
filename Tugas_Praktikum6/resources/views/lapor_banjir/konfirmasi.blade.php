@extends('layouts.app')

@section('content')
    <x-alert type="success" message="Laporan banjir berhasil disimpan ke database!" />

    <br>
    <a href="{{ route('lapor_banjir.index') }}">Lihat Daftar Laporan</a>
@endsection
