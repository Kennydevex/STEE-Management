<?php

namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $guarded = ['id'];

  public function types()
  {
    return $this->hasMany(Type::class);
  }

  public function folks()
  {
    return $this->hasMany(Folk::class);
  }

  public function works()
  {
    return $this->hasMany(Work::class);
  }
}
