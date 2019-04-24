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
    public function byCountries(){
      $query = DB::table('cheese_countries');
      $countries = $query->get();
      
      return view('cheeses/countries', [
        'countries' => $countries
             ]);
    }

    public function byTypes(){
      $query = DB::table('cheese_types');
      $types = $query->get();
      
      return view('cheeses/types', [
        'types' => $types
             ]);
    }

    public function byTextures(){
      $query = DB::table('cheese_textures');
      $textures = $query->get();
      
      return view('cheeses/textures', [
        'textures' => $textures
             ]);
    }

    public function byColors(){
      $query = DB::table('cheese_colors');
      $colors = $query->get();
      
      return view('cheeses/colors', [
        'colors' => $colors
             ]);
    }

    public function singleCheese(Request $request){
      $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      IF ($request->query('name')){
        $query->where('name', '=', $request->query('name'));
    }
      $cheeses = $query->get();
      $cheeseName = $request->query('name');
  
      return view('cheeses/cheese', [
        'cheeses' => $cheeses,
        'cheeseName' => $cheeseName
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
