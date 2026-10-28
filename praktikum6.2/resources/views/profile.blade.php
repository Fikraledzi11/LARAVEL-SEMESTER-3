@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Profil Petugas</div>
    <div class="card-body">
        <p>Nama: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Dibuat: {{ Auth::user()->created_at }}</p>
    </div>
</div>
@endsection
