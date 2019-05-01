<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cheese;
use App\CheeseTexture;

class TexturesController extends Controller
{
    public function textureList(){
        $textures = CheeseTexture::all();
        
        return view('cheeses/textures', [
          'textures' => $textures
               ]);
      }

      public function byTexture(Request $request){

        $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      IF ($request->query('texture')){
        $query->where('texture', '=', $request->query('texture'));
    }
      $cheeses = $query->get();
      $texture = $request->query('texture');

        return view('cheeses/texture', [
            'cheeses' => $cheeses,
            'texture' => $texture
                 ]);

      }
  
}
