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
                'bulan' => 1,
                'total_biaya' => 500000
            ],
            [
                'bulan' => 2,
                'total_biaya' => 200000
            ],
            [
                'bulan' => 3,
                'total_biaya' => 700000
            ],
        ];

        $this->db->table('transaksi')->insertBatch($data);
    }
}
