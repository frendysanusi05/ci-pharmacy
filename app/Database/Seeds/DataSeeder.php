<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $this->call('ObatSeeder');
        $this->call('TransaksiSeeder');
        $this->call('PesananSeeder');
    }
}
