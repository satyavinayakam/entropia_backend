<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = ['type_id','member_name','gender','dob','biodata'];
}
