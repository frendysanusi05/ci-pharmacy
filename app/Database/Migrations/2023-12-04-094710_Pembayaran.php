<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
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
            'tanggal'    => [
                'type'           => 'DATETIME',
            ],
            'detail'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'total_biaya'  => [
                'type'           => 'INTEGER',
                'unsigned'       => true,
            ], 
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pembayaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
