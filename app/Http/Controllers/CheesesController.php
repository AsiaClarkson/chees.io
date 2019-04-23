<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CheesesController extends Controller
{
    public function index()
    {
      $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      $cheeses = $query->get();
  
      return view('cheeses/index', [
        'cheeses' => $cheeses
             ]);
    }

    public function create()
    {
      return view('cheeses/create');
    }
    // public function store()
    // {
    //   return view('cheeses/create');
    // }
    
}
