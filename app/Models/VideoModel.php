<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table            = 'videos';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'title', 
        'youtube_url', 
        'youtube_id', 
        'category', 
        'description', 
        'is_featured', 
        'published_at'
    ];
    protected $useTimestamps    = true;

    // Helper untuk mengekstrak ID dari berbagai format URL Youtube
    public function extractYoutubeId($url)
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $url, $match);
        return $match[1] ?? null;
    }
}