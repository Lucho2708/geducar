<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
}