<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriVision Kabupaten Garut</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-emerald-50/50 text-slate-800 flex flex-col min-h-screen">


    <header class="bg-emerald-800 text-white shadow-md border-b border-emerald-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-emerald-600 rounded-lg">
                    <svg class="w-7 h-7 text-emerald-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold tracking-tight">AgriVision Kabupaten Garut</h1>
                    <p class="text-xs text-emerald-200">Sistem Monitoring Hama Berbasis Computer Vision</p>
                </div>
            </div>
        </div>
    </header>

    @include('partials.navbar')

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    <footer class="bg-emerald-900 text-emerald-200 text-center py-5 border-t border-emerald-950 mt-auto">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-sm font-medium">&copy; 2026 AgriVision &ndash; Kelompok Tani Makmur Kabupaten Garut</p>
            <p class="text-xs text-emerald-400 mt-1">Mengoptimalkan Hasil Panen Melalui Teknologi Klasifikasi EfficientNet-B0</p>
        </div>
    </footer>

</body>
</html>


