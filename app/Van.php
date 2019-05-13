<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    protected $table = 'vans';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
