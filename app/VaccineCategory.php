<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VaccineCategory extends Model
{
    protected $table = 'vaccines';

    public function vaccineChildrent()
    {
        return $this->hasMany(VaccineCategory::class, 'idparent');
    }
}
