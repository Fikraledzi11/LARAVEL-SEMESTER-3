@extends('layouts.main')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white rounded-xl shadow-sm border border-emerald-100 p-6 sm:p-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4 border-b border-slate-100 pb-3">Tentang Sistem AgriVision Garut</h2>

        <p class="text-slate-700 leading-relaxed mb-6">
            AgriVision Garut dikembangkan untuk mendigitalisasi proses pemantauan serangan hama tanaman di lingkungan Kelompok Tani Makmur Kabupaten Garut. Dengan mengintegrasikan hasil estimasi model Computer Vision <strong>EfficientNet-B0</strong>, sistem memberikan saran penanganan yang cepat dan presisi.
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-emerald-50 rounded-lg p-5 border border-emerald-200">
                <h3 class="font-bold text-emerald-900 text-lg mb-2 flex items-center">
                    <span class="mr-2">📍</span> Wilayah Deteksi Cakupan
                </h3>
                <ul class="list-disc list-inside text-slate-700 space-y-1">
                    <li>Kecamatan Garut Kota</li>
                    <li>Kecamatan Tarogong Kaler</li>
                    <li>Kecamatan Samarang</li>
                </ul>
            </div>

            <div class="bg-emerald-50 rounded-lg p-5 border border-emerald-200">
                <h3 class="font-bold text-emerald-900 text-lg mb-2 flex items-center">
                    <span class="mr-2">🤖</span> Model Klasifikasi
                </h3>
                <p class="text-slate-700 font-semibold mb-1">EfficientNet-B0</p>
                <p class="text-xs text-slate-600 leading-normal">
                    Arsitektur convolutional neural network (CNN) ringan berkemampuan klasifikasi citra daun tanaman dengan akurasi dan skalabilitas tinggi.
                </p>
            </div>
        </div>

        <div class="mt-6">
            <h3 class="font-bold text-slate-900 text-lg mb-3">Parameter Deteksi yang Dicatat</h3>
            <div class="grid sm:grid-cols-3 gap-4 text-center">
                <div class="p-4 bg-slate-50 rounded-lg border border-slate-200">
                    <div class="text-emerald-700 font-bold text-lg">Jenis Hama</div>
                    <p class="text-xs text-slate-500 mt-1">Wereng Cokelat, Ulat Grayak, Kutu Daun</p>
                </div>
                <div class="p-4 bg-slate-50 rounded-lg border border-slate-200">
                    <div class="text-emerald-700 font-bold text-lg">Confidence Score</div>
                    <p class="text-xs text-slate-500 mt-1">Nilai Keyakinan Model (0–100%)</p>
                </div>
                <div class="p-4 bg-slate-50 rounded-lg border border-slate-200">
                    <div class="text-emerald-700 font-bold text-lg">Tingkat Kerusakan</div>
                    <p class="text-xs text-slate-500 mt-1">Persentase Luas Area Terinfeksi (%)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
