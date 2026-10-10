<div class="card">
    <h3>Pelapor: {{ $laporan['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi_air'] }} cm</p>

    @if($laporan['tinggi_air'] < 30)
        <p>Status: <span style="color: green; font-weight:bold;">Waspada</span></p>
    @elseif($laporan['tinggi_air'] >= 30 && $laporan['tinggi_air'] <= 70)
        <p>Status: <span style="color: orange; font-weight:bold;">Siaga</span></p>
    @else
        <p>Status: <span style="color: red; font-weight:bold;">Awas</span></p>
    @endif
</div>
