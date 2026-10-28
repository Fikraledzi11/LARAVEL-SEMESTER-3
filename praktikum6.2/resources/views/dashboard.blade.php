@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Daftar Laporan</div>
    <div class="card-body">
        Selamat datang, {{ Auth::user()->name }}! Ini adalah halaman daftar laporan BPBD.
    </div>
</div>
@endsection