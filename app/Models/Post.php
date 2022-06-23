<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'cover_image'];

    public function category(): BelongsTo {
        return $this->belongsTO(App\Models\Category::class);
    }
}


