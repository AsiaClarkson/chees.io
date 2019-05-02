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
      
      public function byColor($id=null){
        
      $query = Cheese::where('color_id',$id);
      $cheeses = $query->get();
      $color = CheeseColor::find($id);
        return view('cheeses/color', [
            'cheeses' => $cheeses,
            'color' => $color
                 ]);

      }
}
