<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | LaporBanjir BPBD</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9;}
        header, footer { background: #004085; padding: 15px; text-align: center; color: white; }
        nav { margin-top: 10px; }
        nav a { margin: 0 10px; text-decoration: none; color: #ffdd57; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { background: white; padding: 20px; margin-top: 15px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px; background: #fff;}
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold;}
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <header>
        <h1>Sistem Pelaporan LaporBanjir BPBD</h1>
        <nav>
            <a href="{{ route('lapor_banjir.create') }}">Form Pelaporan</a>
            <a href="{{ route('lapor_banjir.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 LaporBanjir BPBD Kab. Bandung - [FIKRAL EDZI ALFITRAH dan 707012500006]</p>
    </footer>
</body>
</html>
