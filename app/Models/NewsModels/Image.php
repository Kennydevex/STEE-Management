<?php

namespace STEE\Models\NewsModels;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
