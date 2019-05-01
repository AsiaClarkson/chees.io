<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cheese;
use App\CheeseColor;

class ColorsController extends Controller
{
    public function colorList(){
        $colors = CheeseColor::all();
        
        return view('cheeses/colors', [
          'colors' => $colors
               ]);
      }
      
      public function byColor(Request $request){

        $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      IF ($request->query('color')){
        $query->where('color', '=', $request->query('color'));
    }
      $cheeses = $query->get();
      $color = $request->query('color');

        return view('cheeses/color', [
            'cheeses' => $cheeses,
            'color' => $color
                 ]);

      }
}
