<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    protected $table = 'parents';
    protected $primaryKey = 'id';
    public $timestamps = false;

}
