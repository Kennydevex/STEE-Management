<?php
//Este modelo refere-se a relação existente entre materiais e trabalhos, ou seja a atribução dos meteriais aos determinados projetos_
//Portanto relaciona-se com a tebaleMaterial_Work
namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Attribution extends Model
{
  protected $guarded = ['id'];

  protected $table = 'material_work';
  // ==================Relacionamento============================
    public function works()
    {
      return $this->hasMany(Work::class);
    }

    public function materials()
    {
      return $this->hasMany(Material::class);
    }
}
