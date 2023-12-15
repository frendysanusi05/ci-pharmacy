<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PesananSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_pesanan'    => 1,
                'id_obat'       => 1,
                'nama_pasien'   => 'Pasien 1',
                'status_bayar'  => 1,
                'status_ambil'  => 1,
            ],
            [
                'id_pesanan'    => 1,
                'id_obat'       => 1,
                'nama_pasien'   => 'Pasien 1',
                'status_bayar'  => 1,
                'status_ambil'  => 1,
            ],
            [
                'id_pesanan'    => 1,
                'id_obat'       => 3,
                'nama_pasien'   => 'Pasien 1',
                'status_bayar'  => 1,
                'status_ambil'  => 1,
            ],
            [
                'id_pesanan'    => 2,
                'id_obat'       => 2,
                'nama_pasien'   => 'Pasien 2',
                'status_bayar'  => 1,
                'status_ambil'  => 0,
            ],
            [
                'id_pesanan'    => 2,
                'id_obat'       => 4,
                'nama_pasien'   => 'Pasien 2',
                'status_bayar'  => 1,
                'status_ambil'  => 0,
            ],
            [
                'id_pesanan'    => 3,
                'id_obat'       => 6,
                'nama_pasien'   => 'Pasien 3',
                'status_bayar'  => 0,
                'status_ambil'  => 0,
            ],
            [
                'id_pesanan'    => 4,
                'id_obat'       => 5,
                'nama_pasien'   => 'Pasien 4',
                'status_bayar'  => 1,
                'status_ambil'  => 0,
            ],
            [
                'id_pesanan'    => 4,
                'id_obat'       => 9,
                'nama_pasien'   => 'Pasien 4',
                'status_bayar'  => 0,
                'status_ambil'  => 0,
            ],
        ];

        $this->db->table('pesanan')->insertBatch($data);
    }
}
