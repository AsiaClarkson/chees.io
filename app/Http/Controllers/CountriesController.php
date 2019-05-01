<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheeseCountry;
use App\Cheese;
use DB;

class CountriesController extends Controller
{
    public function countryList(){
        $countries = CheeseCountry::all();
        
        
        return view('cheeses/countries', [
          'countries' => $countries
               ]);
      }
      public function byCountry(Request $request){
        // $cheeses = Cheese::where('country_id', '=', $request->query('country'));
        // $country = $request->query('country');
        // $country = CheeseCountry::find($request->query('country'));
        // $cheeses = $country->cheeses();

        $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      IF ($request->query('country')){
        $query->where('country', '=', $request->query('country'));
    }
      $cheeses = $query->get();
      $country = $request->query('country');

        return view('cheeses/country', [
            'cheeses' => $cheeses,
            'country' => $country
                 ]);

      }
}
