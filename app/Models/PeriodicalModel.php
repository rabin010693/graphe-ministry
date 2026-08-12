<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodicalModel extends Model
{
    protected $table            = 'periodicals';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['edition_number', 'title_id', 'title_en', 'publish_month_year', 'pdf_file'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}