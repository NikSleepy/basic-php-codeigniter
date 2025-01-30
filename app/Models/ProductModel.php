<?php 


namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'price'];
    // protected $useTimestamps = true; // Aktifkan timestamps jika ingin menggunakan fitur CI4
    // protected $createdField  = 'created_at';
}