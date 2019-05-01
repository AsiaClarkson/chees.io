<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheese extends Model
{
protected $primaryKey = 'id';
public $timestamps = false;
protected $guarded = ['id'];

public function cheeseType()
{
  return $this->hasOne('App\CheeseType', 'id', 'type_id');
}
public function cheeseTexture()
{
  return $this->hasOne('App\CheeseTexture', 'id', 'texture_id');
}
public function cheeseColor()
{
  return $this->hasOne('App\CheeseColor', 'id', 'color_id');
}
public function cheeseCountry()
{
  return $this->hasOne('App\CheeseCountry', 'id', 'country_id');
}
public function dishes()
{
  return $this->belongsToMany('App\Dish');
}
}
