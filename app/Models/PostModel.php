<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    // Kolom-kolom yang diizinkan untuk diisi/diubah
    protected $allowedFields    = [
        'user_id',
        'title',
        'slug',
        'category',
        'author',
        'date',
        'excerpt',
        'content',
        'status'
    ];

    // Otomatis mengelola kolom created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Helper method untuk mengambil semua post atau berdasarkan slug
    public function getPosts($slug = false)
    {
        if ($slug === false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}