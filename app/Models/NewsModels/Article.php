<?php

namespace STEE\Models\NewsModels;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $guarded = ['id'];

  public function image()
  {
    return $this->belongsTo(Image::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }

  public function categories()
  {
    return $this->belongsTo(Category::class);
  }
}
