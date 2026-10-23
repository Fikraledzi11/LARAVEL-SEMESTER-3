@php
    if ($laporan->tinggi_genangan >= 100) {
        $status = 'Awas';
        $badgeColor = 'background-color: #dc3545; color: white;';
    } elseif ($laporan->tinggi_genangan >= 50) {
        $status = 'Siaga';
        $badgeColor = 'background-color: #ffc107; color: black;';
    } else {
        $status = 'Waspada';
        $badgeColor = 'background-color: #17a2b8; color: white;';
    }
@endphp

<div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 8px;">
    <h3>Lokasi: {{ $laporan->lokasi }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
    <p><strong>Tanggal Kejadian:</strong> {{ $laporan->tanggal_kejadian }}</p>
    <p>
        <strong>Status:</strong>
        <span style="padding: 5px 10px; border-radius: 4px; {{ $badgeColor }}">
            {{ $status }}
        </span>
    </p>
</div>
