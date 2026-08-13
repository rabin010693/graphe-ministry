<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table            = 'articles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    protected $allowedFields    = [
        'category', 'title_id', 'title_en', 'slug', 
        'pdf_file', 'content_id', 'content_en', 'is_published'
    ];

    // Matikan otomatis timestamp karena Anda hanya punya created_at (tanpa updated_at)
    protected $useTimestamps = false;
}