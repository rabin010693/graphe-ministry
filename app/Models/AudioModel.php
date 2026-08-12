<?php

namespace App\Models;

use CodeIgniter\Model;

class AudioModel extends Model
{
    protected $table            = 'audios';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title', 'speaker', 'category', 'audio_type', 'audio_file'];
    protected $useTimestamps    = true;
}