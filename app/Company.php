<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function customers(){

    	return $this->hasMany('App\Customer');
    	
    }

}
