<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obat extends Migration
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
            'nama'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jenis'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'harga'  => [
                'type'           => 'INTEGER',
            ], 
            'jumlah_stok'  => [
                'type'           => 'INTEGER',
            ], 
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('obat', true);
    }

    public function down()
    {
        $this->forge->dropTable('obat');
    }
}
