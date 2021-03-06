<?php
//Trasação traduze e relação existente entre o custo fixo o os trabalhos ou projetos, portanto vem da tebale  Fixed_Cost_work
namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Transation extends Model
{
  
  protected $guarded = ['id'];

  protected $table = 'fixedCost_work';

  public function works()
  {
    return $this->hasMany(Work::class);
  }

  public function fixedCosts()
  {
    return $this->hasMany(FixedCost::class);
  }
}
