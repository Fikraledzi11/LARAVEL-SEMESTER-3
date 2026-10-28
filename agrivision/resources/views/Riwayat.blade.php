@extends('layouts.main')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-emerald-100 p-6 sm:p-8">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4 border-b border-slate-100 pb-4">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Riwayat Deteksi Hama</h2>
            <p class="text-sm text-slate-500">Daftar seluruh rekaman deteksi hama lahan pertanian Kabupaten Garut.</p>
        </div>
        <a href="{{ route('deteksi') }}" class="px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-medium rounded-lg transition shadow-sm">
            + Tambah Deteksi Baru
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm border-collapse">
            <thead>
                <tr class="bg-emerald-800 text-white">
                    <th class="py-3 px-4 font-semibold rounded-tl-lg">No</th>
                    <th class="py-3 px-4 font-semibold">Lokasi</th>
                    <th class="py-3 px-4 font-semibold">Tanaman</th>
                    <th class="py-3 px-4 font-semibold">Jenis Hama</th>
                    <th class="py-3 px-4 font-semibold text-center">Confidence</th>
                    <th class="py-3 px-4 font-semibold text-center">Kerusakan</th>
                    <th class="py-3 px-4 font-semibold text-center">Status Deteksi</th>
                    <th class="py-3 px-4 font-semibold rounded-tr-lg">Rekomendasi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 border-b border-slate-200">
                @forelse($riwayat as $index => $item)
                    <tr class="hover:bg-emerald-50/50 transition duration-150">
                        <td class="py-3 px-4 font-medium text-slate-500">{{ $index + 1 }}</td>
                        <td class="py-3 px-4 font-medium text-slate-800">{{ $item->lokasi }}</td>
                        <td class="py-3 px-4 text-slate-700">{{ $item->nama_tanaman }}</td>
                        <td class="py-3 px-4 text-emerald-900 font-semibold">{{ $item->jenis_hama }}</td>
                        <td class="py-3 px-4 text-center font-bold text-slate-800">{{ $item->confidence_score }}%</td>
                        <td class="py-3 px-4 text-center text-slate-700">{{ $item->tingkat_kerusakan }}%</td>
                        <td class="py-3 px-4 text-center">
                            @if($item->status_deteksi == 'Tidak Pasti')
                                <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800">
                                    Tidak Pasti
                                </span>
                            @elseif($item->status_deteksi == 'Indikasi Hama')
                                <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800">
                                    Indikasi Hama
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-red-100 text-red-800">
                                    Hama Terkonfirmasi
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-xs text-slate-600 max-w-xs leading-relaxed">
                            {{ $item->rekomendasi }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="py-8 text-center text-slate-400">
                            Belum ada data deteksi hama yang tercatat. Silakan lakukan input form.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
