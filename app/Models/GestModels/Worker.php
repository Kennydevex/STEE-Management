<?php

namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{

  protected $guarded = ['id'];

  public function placings()
  {
    return $this->belongsTo(Placing::class);
  }


  public function works()
  {
    return $this->belongsToMany(Work::class);
  }

  public function types()
  {
    return $this->hasMany(Type::class);
  }

  public function folks()
  {
    return $this->hasMany(Folk::class);
  }
  
  
  public function absences()
  {
    return $this->belongsToMany(Absence::class);
  }
  
  public function frequencies()
  {
    return $this->hasMany(Frequency::class);
  }

}
