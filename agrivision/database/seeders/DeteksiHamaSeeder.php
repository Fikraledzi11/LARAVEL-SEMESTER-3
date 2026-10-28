<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DeteksiHamaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $lokasiList = ['Garut Kota', 'Tarogong Kaler', 'Samarang'];
        $tanamanList = ['Padi', 'Jagung', 'Cabai'];
        $hamaList = ['Wereng Cokelat', 'Ulat Grayak', 'Kutu Daun'];

        for ($i = 0; $i < 15; $i++) {
            $confidence = $faker->numberBetween(30, 99);

            if ($confidence < 50) {
                $status = 'Tidak Pasti';
                $rekomendasi = 'Perlu verifikasi manual oleh petugas';
            } elseif ($confidence <= 80) {
                $status = 'Indikasi Hama';
                $rekomendasi = 'Lakukan pemantauan intensif';
            } else {
                $status = 'Hama Terkonfirmasi';
                $rekomendasi = 'Segera lakukan pengendalian hama';
            }

        
            DB::table('deteksi_hama')->insert([
                'lokasi' => $faker->randomElement($lokasiList),
                'nama_tanaman' => $faker->randomElement($tanamanList),
                'jenis_hama' => $faker->randomElement($hamaList),
                'confidence_score' => $confidence,
                'tingkat_kerusakan' => $faker->randomFloat(1, 0, 80),
                'status_deteksi' => $status,
                'rekomendasi' => $rekomendasi,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
