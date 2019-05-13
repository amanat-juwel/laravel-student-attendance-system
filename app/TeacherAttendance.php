<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherAttendance extends Model
{
    protected $table = 'teacher_attendance';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
