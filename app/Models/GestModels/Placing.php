<?php
//Este modelo faz parte da relação existente entre os trabalhadores e os trabalhos;
//Portanto pertence a tabele Work_Workers
namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Placing extends Model
{
  protected $guarded = ['id'];

  protected $table = 'work_worker';
  
  public function works()
  {
    return $this->hasMany(Work::class);
  }

  public function workers()
  {
    return $this->hasMany(Worker::class);
  }
}
