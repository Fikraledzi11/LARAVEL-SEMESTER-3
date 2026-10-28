@extends('layouts.main')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-xl shadow-sm border border-emerald-100 p-6 sm:p-8">
    <div class="mb-6 flex justify-between items-center border-b border-slate-100 pb-4">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Hasil Analisis &amp; Rekomendasi Deteksi</h2>
            <p class="text-sm text-slate-500">ID Laporan: #{{ $deteksi->id }} | Dicatat pada: {{ $deteksi->created_at->format('d M Y, H:i') }}</p>
        </div>

<a href="{{ route('deteksi') }}" class="text-sm text-emerald-700 hover:underline font-medium">&larr; Input Baru</a>
    </div>


    <div class="overflow-x-auto mb-6">
        <table class="w-full text-left border-collapse border border-slate-200">
            <tbody>
                <tr class="border-b bg-slate-50">
                    <th class="py-3 px-4 text-sm font-semibold text-slate-700 w-1/3 border-r">Lokasi Lahan</th>
                    <td class="py-3 px-4 text-sm text-slate-900">{{ $deteksi->lokasi }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-sm font-semibold text-slate-700 border-r">Nama Tanaman</th>
                    <td class="py-3 px-4 text-sm text-slate-900">{{ $deteksi->nama_tanaman }}</td>
                </tr>
                <tr class="border-b bg-slate-50">
                    <th class="py-3 px-4 text-sm font-semibold text-slate-700 border-r">Jenis Hama</th>
                    <td class="py-3 px-4 text-sm text-slate-900 font-semibold text-emerald-800">{{ $deteksi->jenis_hama }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-sm font-semibold text-slate-700 border-r">Confidence Score</th>
                    <td class="py-3 px-4 text-sm text-slate-900 font-bold">{{ $deteksi->confidence_score }}%</td>
                </tr>
                <tr class="border-b bg-slate-50">
                    <th class="py-3 px-4 text-sm font-semibold text-slate-700 border-r">Tingkat Kerusakan Daun</th>
                    <td class="py-3 px-4 text-sm text-slate-900">{{ $deteksi->tingkat_kerusakan }}%</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-sm font-semibold text-slate-700 border-r">Status Deteksi</th>
                    <td class="py-3 px-4 text-sm">
                        @if($deteksi->status_deteksi == 'Tidak Pasti')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800 border border-amber-300">
                                ⚠️ {{ $deteksi->status_deteksi }}
                            </span>
                        @elseif($deteksi->status_deteksi == 'Indikasi Hama')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800 border border-blue-300">
                                🔍 {{ $deteksi->status_deteksi }}
                            </span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-800 border border-red-300">
                                🚨 {{ $deteksi->status_deteksi }}
                            </span>
                        @endif
                    </td>
                </tr>
                <tr class="bg-emerald-50">
                    <th class="py-3 px-4 text-sm font-semibold text-emerald-900 border-r border-emerald-200">Rekomendasi Penanganan</th>
                    <td class="py-3 px-4 text-sm font-semibold text-emerald-950">{{ $deteksi->rekomendasi }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex justify-end space-x-3">
        <a href="{{ route('riwayat') }}" class="...">Lihat Seluruh Riwayat</a>
            Lihat Seluruh Riwayat
        </a>
    </div>
</div>
@endsection
