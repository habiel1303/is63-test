<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kode_jurusan' => 'IFK', 'nama_jurusan' => 'Informatika Komputer'],
            ['kode_jurusan' => 'SKR', 'nama_jurusan' => 'Sekretaris'],
            ['kode_jurusan' => 'DBK', 'nama_jurusan' => 'Digital Bisnis Komunikasi'],
            ['kode_jurusan' => 'KKA', 'nama_jurusan' => 'Komputer Akuntansi'],
            ['kode_jurusan' => 'MPK', 'nama_jurusan' => 'Manajemen Perkantoran'],
            ['kode_jurusan' => 'KBD', 'nama_jurusan' => 'Komunikasi Bisnis Digital'],
        ];

        foreach ($data as $row) {
            Jurusan::updateOrCreate(
                ['kode_jurusan' => $row['kode_jurusan']],
                ['nama_jurusan' => $row['nama_jurusan']]
            );
        }
    }
}

