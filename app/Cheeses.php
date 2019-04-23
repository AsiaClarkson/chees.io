<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheeses extends Model
{
protected $primaryKey = 'id';
public $timestamps = false;

public function cheeseType()
{
  return $this->belongsTo('App\CheeseType', 'type_id');
}
public function cheeseTexture()
{
  return $this->belongsTo('App\CheeseTexture', 'texture_id');
}
public function cheeseColor()
{
  return $this->belongsTo('App\CheeseColor', 'color_id');
}
public function cheeseCountry()
{
  return $this->belongsTo('App\CheeseCountry', 'country_id');
}
}
