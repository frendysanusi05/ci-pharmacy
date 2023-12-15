<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'panadol biru',
                'jenis'         => 'tablet',
                'harga'         => 12000,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'panadol merah',
                'jenis'         => 'tablet',
                'harga'         => 14600,
                'jumlah_stok'   => 15,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'promodex',
                'jenis'         => 'tablet',
                'harga'         => 3100,
                'jumlah_stok'   => 40,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'paratusin',
                'jenis'         => 'tablet',
                'harga'         => 15700,
                'jumlah_stok'   => 30,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'scandexon',
                'jenis'         => 'tablet',
                'harga'         => 2300,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'ocuson',
                'jenis'         => 'tablet',
                'harga'         => 18500,
                'jumlah_stok'   => 25,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'methylprednisolone',
                'jenis'         => 'tablet',
                'harga'         => 5500,
                'jumlah_stok'   => 100,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'cetirizine',
                'jenis'         => 'tablet',
                'harga'         => 5000,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'proris',
                'jenis'         => 'sirup',
                'harga'         => 25600,
                'jumlah_stok'   => 10,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'proris forte',
                'jenis'         => 'sirup',
                'harga'         => 32900,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
        ];

        $this->db->table('obat')->insertBatch($data);
    }
}
