<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheeseColor extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;

public function cheeses()
{
  return $this->belongsToMany('App\Cheese', 'color_id');
}
}
