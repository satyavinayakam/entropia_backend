<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CasteCrews extends Model
{
    protected $table = 'caste_crew';
    protected $fillable = ['movie_id','member_id'];

    public function Members(){
        return $this->hasMany('App\Models\Members', 'id', 'member_id');
    }

}
