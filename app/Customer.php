<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = ['name', 'email', 'status', 'company_id'];


  public function getStatusAttribute($attribute)
  {

      return $this->activeOptions()[$attribute]; 
      
  }



  public function scopeActive($query)
  {
  		return $query->where('status', 1);
  }

  public function scopeInActive($query)

  {
  		return $query->where('status', 0);
  }

  public function company(){

  	return $this->belongsTo('App\Company');
    
  }

  public function activeOptions(){
    return [
        1 => 'Active',
        0 => 'Inactive',
        2 => 'In-Progress'
      ] ;
  }

}
