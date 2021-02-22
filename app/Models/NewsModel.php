<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFieelds = ['title', 'conteent', 'status', 'author', 'slug'];
}