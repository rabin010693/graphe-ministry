<?php

namespace App\Models;

use CodeIgniter\Model;

class PantiStaffModel extends Model
{
    protected $table            = 'panti_staff';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['role_title', 'name', 'icon'];
    protected $useTimestamps    = true;
}