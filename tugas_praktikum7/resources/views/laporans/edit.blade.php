<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data & Perbarui Status Laporan</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('laporans.update', $laporan) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="nama_pelapor" value="Nama Pelapor" />
                            <x-text-input id="nama_pelapor" name="nama_pelapor" type="text" class="mt-1 block w-full" :value="old('nama_pelapor', $laporan->nama_pelapor)" required />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="no_hp" value="Nomor HP" />
                            <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full" :value="old('no_hp', $laporan->no_hp)" required />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="lokasi" value="Lokasi Detail" />
                        <x-text-input id="lokasi" name="lokasi" type="text" class="mt-1 block w-full" :value="old('lokasi', $laporan->lokasi)" required />
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="mb-4">
                            <x-input-label for="kecamatan" value="Kecamatan" />
                            <x-text-input id="kecamatan" name="kecamatan" type="text" class="mt-1 block w-full" :value="old('kecamatan', $laporan->kecamatan)" required />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="tinggi_air" value="Tinggi Air (cm)" />
                            <x-text-input id="tinggi_air" name="tinggi_air" type="number" class="mt-1 block w-full" :value="old('tinggi_air', $laporan->tinggi_air)" required />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="status" value="Status Penanganan" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="Menunggu" {{ $laporan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                <option value="Diproses" {{ $laporan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="keterangan" value="Keterangan" />
                        <textarea id="keterangan" name="keterangan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('keterangan', $laporan->keterangan) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Foto Saat Ini:</p>
                        <img src="{{ asset('storage/' . $laporan->foto) }}" class="w-32 rounded border mb-2">

                        <x-input-label for="foto" value="Ganti Foto (Kosongkan jika tidak ingin ganti)" class="mt-3" />
                        <input id="foto" name="foto" type="file" class="mt-1 block w-full">
                        <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    </div>

                    <x-primary-button>Update Data</x-primary-button>
                    <a href="{{ route('laporans.index') }}" class="ms-3 text-gray-600">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
