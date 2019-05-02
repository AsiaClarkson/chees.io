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

      public function byTexture($id=null){

        $query = Cheese::where('texture_id',$id);
        $cheeses = $query->get();
        $texture = CheeseTexture::find($id);

        return view('cheeses/texture', [
            'cheeses' => $cheeses,
            'texture' => $texture
                 ]);

      }
  
}
