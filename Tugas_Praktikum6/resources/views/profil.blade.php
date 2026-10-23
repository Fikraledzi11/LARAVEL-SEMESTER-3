@extends('layouts.app')

@section('content')
<div class="card col-md-8 mx-auto shadow">
    <div class="card-header bg-info text-white">Profil Petugas</div>
    <div class="card-body">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Akun Dibuat:</strong> {{ Auth::user()->created_at->diffForHumans() }}</p>
    </div>
</div>
@endsection
