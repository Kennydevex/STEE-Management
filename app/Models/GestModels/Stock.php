<?php

namespace STEE\Models\GestModels;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    protected $guarded = ['id'];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
