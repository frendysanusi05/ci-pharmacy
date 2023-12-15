<?php

namespace App\Models;

use CodeIgniter\Model;

class Obat extends Model
{
    protected $table            = 'obat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama', 'jenis', 'harga', 'jumlah_stok', 'deskripsi'];
}
