<?php

namespace STEE\Models\SuportModels;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id'];

    public function materials()
    {
        return $this->belongsTo(Material::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function workers()
    {
        return $this->belongsTo(Worker::class);
    }

    public function works()
    {
        return $this->belongsTo(Work::class);
    }
}
