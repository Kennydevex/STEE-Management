<?php
// Este modelo refere-se so ativos que a emprese possui, portanto relaciona-se com a tebela actves
namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{

    protected $guarded = ['id'];
    
    public function types()
    {
      return $this->hasMany(Type::class);
    }
    
    public function workers()
    {
      return $this->belongsToMany(Worker::class, table);
    }
    
    public function Absence()
    {
      return $this->hasMany(XXX::class);
    }
    
    public function frequencies()
    {
      return $this->hasMany(Frequency::class);
    }

}
