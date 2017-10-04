<?php

namespace STEE\Models\NewsModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded = ['id'];

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
