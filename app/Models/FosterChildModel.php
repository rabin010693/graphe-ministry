<?php

namespace App\Models;

use CodeIgniter\Model;

class FosterChildModel extends Model
{
    protected $table            = 'foster_children';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['full_name', 'age', 'gender', 'education'];
    protected $useTimestamps    = true;
}