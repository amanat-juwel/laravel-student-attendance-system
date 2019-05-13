<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsTemplate extends Model
{
    protected $table = 'sms_templates';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
