<?php

namespace STEE\Models\NewsModels;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $guarded = ['id'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
