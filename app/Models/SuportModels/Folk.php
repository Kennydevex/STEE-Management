<?php

namespace STEE\Models\SuportModels;

use Illuminate\Database\Eloquent\Model;

class Folk extends Model
{

  protected $guarded = ['id'];

  public function customers()
  {
    return $this->belongsTo(Customer::class);
  }

  public function workers()
  {
    return $this->belongsTo(Worker::class);
  }

}
