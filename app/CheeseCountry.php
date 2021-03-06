<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheeseCountry extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
   
    public function cheeses()
{
  return $this->hasMany('App\Cheese', 'country_id');
}
}
