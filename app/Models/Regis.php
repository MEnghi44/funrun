<?php namespace App\Models;

use CodeIgniter\Model;

class Regis extends Model {
    protected $table = 'regis';
    protected $allowedFields = ['ID', 'member', 'category_run'];
}