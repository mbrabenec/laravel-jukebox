<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }

    public function directors()
    {
        return $this->belongsTo(Director::class);
    }
}
