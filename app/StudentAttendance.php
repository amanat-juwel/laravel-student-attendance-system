<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    protected $table = 'student_attendance';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
