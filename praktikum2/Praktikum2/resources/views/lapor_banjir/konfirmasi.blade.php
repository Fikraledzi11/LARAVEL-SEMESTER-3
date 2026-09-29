<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Laporan</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #e9fce9; display: flex; justify-content: center; padding: 50px; }
        .card { background: white; padding: 30px; border-radius: 8px; border-left: 5px solid #28a745; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <h2 style="color: #28a745;">Laporan Berhasil Diterima!</h2>
        <p>Terima kasih, berikut rincian laporan Anda:</p>
        <ul>
            <li><strong>Nama Pelapor:</strong> {{ $nama }}</li>
            <li><strong>Lokasi:</strong> {{ $lokasi }}</li>
            <li><strong>Tinggi Genangan:</strong> {{ $tinggi }} cm</li>
        </ul>
        <a href="{{ route('lapor.index') }}" class="btn">Kembali ke Form</a>
    </div>
</body>
</html>
