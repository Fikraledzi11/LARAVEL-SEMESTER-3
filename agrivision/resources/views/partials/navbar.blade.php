<nav class="bg-emerald-700 text-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex flex-wrap justify-between items-center">
        <a href="{{ route('home') }}" class="font-bold text-xl tracking-wide">
            🌱 AgriVision Garut
        </a>
        <div class="space-x-4">
            <a href="{{ route('home') }}" class="hover:text-emerald-200 transition">Dashboard</a>
            <a href="{{ route('tentang') }}" class="hover:text-emerald-200 transition">Tentang</a>
            <a href="{{ route('deteksi') }}" class="hover:text-emerald-200 transition">Input Deteksi</a>
            <a href="{{ route('riwayat') }}" class="hover:text-emerald-200 transition">Riwayat Deteksi</a>
        </div>
    </div>
</nav>
