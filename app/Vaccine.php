<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = ['vaccine_name', 'idparent', 'status', 'amount', 'image', 'important_note', 'discription'];
}
