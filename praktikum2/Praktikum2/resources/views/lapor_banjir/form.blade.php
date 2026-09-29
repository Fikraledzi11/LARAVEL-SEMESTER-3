<!DOCTYPE html>
<html>
<head>
    <title>LaporBanjir - BPBD</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; padding: 50px; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        input { width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;}
        button { width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="card">
        <h2 style="text-align: center; color: #333;">Form LaporBanjir</h2>
        <form action="{{ route('lapor.store') }}" method="POST">
            @csrf
            <label>Nama Pelapor:</label>
            <input type="text" name="nama" required>

            <label>Lokasi Kejadian (Kec/Desa):</label>
            <input type="text" name="lokasi" required>

            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi" required>

            <button type="submit" onclick="return confirm('Apakah data sudah benar?')">Kirim Laporan</button>
        </form>
    </div>
</body>
</html>
