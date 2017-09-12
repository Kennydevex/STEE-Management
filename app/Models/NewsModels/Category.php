<?php

namespace STEE\Models\NewsModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles()
    {
      return $this->hasMany(articles::class);
    }
}
