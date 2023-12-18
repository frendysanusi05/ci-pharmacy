<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'Panadol',
                'jenis'         => 'Obat',
                'harga'         => 12000,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Paratusin',
                'jenis'         => 'Obat',
                'harga'         => 14600,
                'jumlah_stok'   => 15,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Dapirin',
                'jenis'         => 'Obat',
                'harga'         => 3100,
                'jumlah_stok'   => 40,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Paracetamol',
                'jenis'         => 'Obat',
                'harga'         => 15700,
                'jumlah_stok'   => 30,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Sakatonik',
                'jenis'         => 'Suplemen',
                'harga'         => 2300,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Ocuson',
                'jenis'         => 'Obat',
                'harga'         => 18500,
                'jumlah_stok'   => 25,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Tiamin',
                'jenis'         => 'Suplemen',
                'harga'         => 5500,
                'jumlah_stok'   => 100,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Pharmaton',
                'jenis'         => 'Suplemen',
                'harga'         => 5000,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'IMBOOST',
                'jenis'         => 'Suplemen',
                'harga'         => 25600,
                'jumlah_stok'   => 10,
                'deskripsi'     => 'lorem ipsum',
            ],
            [
                'nama'          => 'Enervon-C',
                'jenis'         => 'Suplemen',
                'harga'         => 32900,
                'jumlah_stok'   => 20,
                'deskripsi'     => 'lorem ipsum',
            ],
        ];

        $this->db->table('obat')->insertBatch($data);
    }
}
