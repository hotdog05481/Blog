<?php

namespace App\Models;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function cgy()
    {
        return $this->belongsTo(Cgy::class);
    }

    public function tags()
    {
        return $this->belongsTomany(Tag::class)->withTimestamps()->withPivot('color');
    }

}