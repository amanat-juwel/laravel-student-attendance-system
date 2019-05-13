<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffAttendance extends Model
{
    protected $table = 'staff_attendance';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
