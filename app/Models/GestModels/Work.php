<?php

namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

  protected $guarded = ['id'];

  public function attribution()
  {
    return $this->belongsTo(Attribution::class);
  }

  public function placings()
  {
    return $this->belongsTo(Placing::class);
  }

  public function workers()
  {
    return $this->belongsToMany(Worker::class);
  }

  public function materials()
  {
    return $this->belongsToMany(material::class);
  }

  public function fixedCosts()
  {
    return $this->belongsToMany(FixedCost::class);
  }

  public function customers()
  {
    return $this->belongsTo(Customer::class);
  }

  public function types()
  {
    return $this->hasMany(Type::class);
  }

  public function transations()
  {
    return $this->belongsTo(Transation::class);
  }
}
