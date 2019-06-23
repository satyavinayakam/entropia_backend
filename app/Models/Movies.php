<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['movie','release_date','thumbnail','trailer_url','producer_id'];

    public function Members(){
        return $this->hasOne('App\Models\Members', 'id', 'producer_id');
    }
}
