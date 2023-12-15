<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'      => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pesanan'    => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_obat'  => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'nama_pasien'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status_bayar'  => [
                'type'           => 'BOOLEAN',
            ], 
            'status_ambil'  => [
                'type'           => 'BOOLEAN',
            ], 
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_obat', 'obat', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pesanan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');
    }
}
