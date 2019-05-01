<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cheese;
use App\CheeseType;

class TypesController extends Controller
{
    public function typesList(){
        $types = CheeseType::all();
  
        return view('cheeses/types', [
          'types' => $types
               ]);
      }
      public function byType(Request $request){

        $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      IF ($request->query('type')){
        $query->where('type', '=', $request->query('type'));
    }
      $cheeses = $query->get();
      $type = $request->query('type');

        return view('cheeses/type', [
            'cheeses' => $cheeses,
            'type' => $type
                 ]);

      }
}
