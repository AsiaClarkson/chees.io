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
      public function byCountry($id=null){

        $query = Cheese::where('country_id',$id);
        $cheeses = $query->get();
        $country = CheeseCountry::find($id);
        return view('cheeses/country', [
            'cheeses' => $cheeses,
            'country' => $country
                 ]);

      }
}
