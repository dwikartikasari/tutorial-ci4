<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pelanggan';
    protected $primaryKey       = 'No Pelanggan';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['No_Pelanggan','Nama_Pelanggan','No_Telp','Alamat'];

}
