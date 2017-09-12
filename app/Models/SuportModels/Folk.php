<?php

namespace STEE\Models\SuportModels;

use Illuminate\Database\Eloquent\Model;

class Folk extends Model
{
  
  protected $guarded = ['id'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

}
