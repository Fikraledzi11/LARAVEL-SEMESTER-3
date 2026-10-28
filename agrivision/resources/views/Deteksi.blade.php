@extends('layouts.main')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-slate-100">
    <h2 class="text-2xl font-bold text-slate-800 mb-2">Form Input Hasil Deteksi Hama</h2>
    <p class="text-slate-500 mb-6 text-sm">Masukkan data hasil pengamatan atau prediksi model EfficientNet-B0.</p>

    <form action="{{ route('hasil-deteksi') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Lokasi Lahan</label>
            <select name="lokasi" required class="w-full border border-slate-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
                <option value="Garut Kota">Garut Kota</option>
                <option value="Tarogong Kaler">Tarogong Kaler</option>
                <option value="Samarang">Samarang</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nama Tanaman</label>
            <input type="text" name="nama_tanaman" required placeholder="Contoh: Padi, Jagung, Cabai" class="w-full border border-slate-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Jenis Hama Hasil Prediksi</label>
            <input type="text" name="jenis_hama" required placeholder="Contoh: Wereng Cokelat, Ulat Grayak" class="w-full border border-slate-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Confidence Score (%)</label>
            <input type="number" min="0" max="100" name="confidence_score" required placeholder="Contoh: 85" class="w-full border border-slate-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Tingkat Kerusakan Daun (%)</label>
            <input type="number" step="any" min="0" max="100" name="tingkat_kerusakan" required placeholder="Contoh: 7.5 (gunakan titik)" class="w-full border border-slate-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-semibold py-3 px-4 rounded-lg transition duration-200 cursor-pointer">
            Proses & Simpan Hasil Deteksi
        </button>
    </form>
</div>
@endsection
