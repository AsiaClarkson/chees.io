<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheeseTexture extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function cheeses()
    {
      return $this->hasMany('App\Cheese', 'type_id');
    }
}

