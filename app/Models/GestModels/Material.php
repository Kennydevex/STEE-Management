<?php

namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $guarded = ['id'];

  public function types()
  {
    return $this->hasMany(Type::class);
  }

  public function stocks()
  {
    return $this->belongsTo(Stock::class);
  }

  public function attribution()
  {
    return $this->belongsTo(Attribution::class);
  }

  public function works()
  {
    return $this->belongsToMany(Work::class, table);
  }


}
