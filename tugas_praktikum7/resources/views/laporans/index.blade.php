<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Data Laporan Banjir</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 p-3 rounded bg-green-100 text-green-700">{{ session('success') }}</div>
                @endif

                <a href="{{ route('laporans.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded">+ Buat Laporan Baru</a>

                <div class="overflow-x-auto">
                    <table class="w-full border text-left">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border p-2">No</th>
                                <th class="border p-2">Foto</th>
                                <th class="border p-2">Pelapor</th>
                                <th class="border p-2">Lokasi & Tinggi Air</th>
                                <th class="border p-2">Status</th>
                                <th class="border p-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($laporans as $laporan)
                                <tr>
                                    <td class="border p-2">{{ $laporans->firstItem() + $loop->index }}</td>
                                    <td class="border p-2">
                                        <img src="{{ asset('storage/' . $laporan->foto) }}" class="w-16 h-16 object-cover rounded">
                                    </td>
                                    <td class="border p-2">
                                        {{ $laporan->nama_pelapor }} <br>
                                        <small class="text-gray-500">{{ $laporan->no_hp }}</small>
                                    </td>
                                    <td class="border p-2">
                                        {{ $laporan->lokasi }}, {{ $laporan->kecamatan }} <br>
                                        <span class="text-red-600 font-bold">Air: {{ $laporan->tinggi_air }} cm</span>
                                    </td>
                                    <td class="border p-2">
                                        <span class="px-2 py-1 text-xs rounded text-white
                                            {{ $laporan->status == 'Menunggu' ? 'bg-red-500' : ($laporan->status == 'Diproses' ? 'bg-yellow-500' : 'bg-green-500') }}">
                                            {{ $laporan->status }}
                                        </span>
                                    </td>
                                    <td class="border p-2">
                                        <a href="{{ route('laporans.show', $laporan) }}" class="text-sky-600">Lihat</a> |
                                        <a href="{{ route('laporans.edit', $laporan) }}" class="text-yellow-600">Edit</a> |
                                        <form action="{{ route('laporans.destroy', $laporan) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600" onclick="return confirm('Hapus laporan ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="border p-2 text-center">Belum ada laporan masuk.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">{{ $laporans->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
