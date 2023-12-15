<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use DateTime;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal' => '2023-12-09 13:47:09',
                'detail' => 'Detail Transaksi 1',
                'total_biaya' => 50000
            ],
            [
                'tanggal' => '2023-12-09 16:20:10',
                'detail' => 'Detail Transaksi 2',
                'total_biaya' => 40500
            ],
            [
                'tanggal' => '2023-12-09 23:28:29',
                'detail' => 'Detail Transaksi 3',
                'total_biaya' => 20000
            ],
        ];

        $this->db->table('transaksi')->insertBatch($data);
    }
}
