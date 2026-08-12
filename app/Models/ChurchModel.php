<?php

namespace App\Models;

use CodeIgniter\Model;

class ChurchModel extends Model
{
    protected $table            = 'churches';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['region', 'pastor_name', 'church_name', 'address', 'phone', 'phone_2'];
    protected $useTimestamps    = true;
}