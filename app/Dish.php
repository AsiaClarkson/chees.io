<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    
    public function cheeses()
    {
        return $this->belongsToMany('App\Cheese');
    }
}
