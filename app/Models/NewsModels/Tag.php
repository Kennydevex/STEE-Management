<?php

namespace STEE\Models\NewsModels;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $guarded = ['id'];
    
    public function articles()
    {
        return $this->belongsToMany(Article::class, table);
    }
}
