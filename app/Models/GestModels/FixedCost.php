<?php

namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class FixedCost extends Model
{

  protected $guarded = ['id'];

  public function works()
  {
    return $this->belongsToMany(Work::class);
  }

  public function transations()
  {
    return $this->belongsTo(Transation::class);
  }

}
