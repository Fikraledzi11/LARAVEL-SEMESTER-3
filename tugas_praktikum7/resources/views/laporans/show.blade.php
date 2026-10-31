<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Laporan Banjir</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 space-y-3">
                <img src="{{ asset('storage/' . $laporan->foto) }}" class="max-w-md rounded border mb-4">

                <p><strong>Status Penanganan:</strong> <span class="font-bold {{ $laporan->status == 'Selesai' ? 'text-green-600' : 'text-red-600' }}">{{ $laporan->status }}</span></p>
                <p><strong>Dilaporkan Oleh:</strong> {{ $laporan->nama_pelapor }} ({{ $laporan->no_hp }})</p>
                <p><strong>Lokasi Terdampak:</strong> {{ $laporan->lokasi }}, Kecamatan {{ $laporan->kecamatan }}</p>
                <p><strong>Tinggi Air:</strong> {{ $laporan->tinggi_air }} cm</p>
                <p><strong>Keterangan Tambahan:</strong> <br> {{ $laporan->keterangan ?? 'Tidak ada keterangan tambahan.' }}</p>
                <p class="text-sm text-gray-500 mt-4">Waktu Laporan: {{ $laporan->created_at->format('d M Y, H:i') }}</p>

                <div class="pt-6 border-t mt-4">
                    <a href="{{ route('laporans.edit', $laporan) }}" class="text-white bg-yellow-500 px-4 py-2 rounded">Edit & Ubah Status</a>
                    <a href="{{ route('laporans.index') }}" class="text-gray-600 ml-4">Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
