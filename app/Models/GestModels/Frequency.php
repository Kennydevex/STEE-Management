<?php
// Este modelo refere-se so ativos que a emprese possui, portanto relaciona-se com a tebela actves
namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{

    protected $guarded = ['id'];

    public function workers()
    {
      return $this->belongsTo(Worker::class);
    }

    public function absences()
    {
      return $this->belongsTo(Absence::class);
    }
}
}
