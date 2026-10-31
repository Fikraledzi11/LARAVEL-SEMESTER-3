<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kirim Laporan Banjir</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <!-- Atribut enctype WAJIB ada -->
                <form action="{{ route('laporans.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="nama_pelapor" value="Nama Pelapor" />
                            <x-text-input id="nama_pelapor" name="nama_pelapor" type="text" class="mt-1 block w-full" :value="old('nama_pelapor')" required />
                            <x-input-error :messages="$errors->get('nama_pelapor')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="no_hp" value="Nomor HP" />
                            <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full" :value="old('no_hp')" required />
                            <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="lokasi" value="Lokasi Detail / Alamat" />
                        <x-text-input id="lokasi" name="lokasi" type="text" class="mt-1 block w-full" :value="old('lokasi')" required />
                        <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="kecamatan" value="Kecamatan" />
                            <x-text-input id="kecamatan" name="kecamatan" type="text" class="mt-1 block w-full" :value="old('kecamatan')" required />
                            <x-input-error :messages="$errors->get('kecamatan')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="tinggi_air" value="Tinggi Air (cm)" />
                            <x-text-input id="tinggi_air" name="tinggi_air" type="number" class="mt-1 block w-full" :value="old('tinggi_air')" required />
                            <x-input-error :messages="$errors->get('tinggi_air')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="keterangan" value="Keterangan Tambahan" />
                        <textarea id="keterangan" name="keterangan" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('keterangan') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="foto" value="Foto Bukti (jpg, png - maks. 2MB)" />
                        <input id="foto" name="foto" type="file" class="mt-1 block w-full" required>
                        <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    </div>

                    <x-primary-button>Kirim Laporan</x-primary-button>
                    <a href="{{ route('laporans.index') }}" class="ms-3 text-gray-600">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
