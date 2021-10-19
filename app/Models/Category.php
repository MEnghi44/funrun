<?php namespace App\Models;

use CodeIgniter\Model;

class Category extends Model {
    protected $table = 'category';
    protected $allowedFields = ['category_id', 'category_name', 'length', 'price'];
}