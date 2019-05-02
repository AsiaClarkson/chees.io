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
      public function byType($id=null){
        $query = Cheese::where('type_id',$id);
        $cheeses = $query->get();
        $type = CheeseType::find($id);

        return view('cheeses/type', [
            'cheeses' => $cheeses,
            'type' => $type
                 ]);

      }
}
