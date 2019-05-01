<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cheese;
use App\CheeseColor;
use App\CheeseType;
use App\CheeseCountry;
use App\CheeseTexture;
use Validator;

class CheesesController extends Controller
{
    public function index()
    {
      /* $query = DB::table('cheeses')
      ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      ;
      $cheeses = $query->get();*/

      $cheeses = Cheese::orderBy('name', 'asc')->get();
      
  
      return view('cheeses/index', [
        'cheeses' => $cheeses
             ]);
    }

    public function singleCheese($id=null){
      // $query = DB::table('cheeses')
      // ->select('cheeses.id  as cheeseId')
      // ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
      // ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
      // ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
      // ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
      // ;
      $cheese = Cheese::find($id);
    //   IF ($request->query('name')){
    //     $query->where('name', '=', $request->query('name'));
    // }
    //   $cheese = $query->first();

      return view('cheeses/cheese', [
        'cheese' => $cheese
             ]);

    }

    public function create()
    {
      $cheeses = Cheese::all();
      $types = CheeseType::all();
      $textures = CheeseTexture::all();
      $countries = CheeseCountry::all();
      $colors = CheeseColor::all();

      return view('cheeses/create',[
      'cheeses' => $cheeses,
      'types' => $types,
      'textures' => $textures,
      'countries' => $countries,
      'colors' => $colors
      ]);
    }

    public function store(Request $request){
      $input = $request->all();

      $validation = Validator::make($input, [
          'name' => 'unique:cheeses,name|required|min:3',
          'flavor' => 'required|min:3',
          'type' => 'required',
          'texture' => 'required',
          'color' => 'required',
          'country' => 'required',
          'image' => 'url'
      ]);

        //if validation fails, redirect back to for w/ error message
        if($validation->fails()){
          return redirect('/cheeses/create')
          ->withInput()
          ->withErrors($validation);
      }

  DB::table('cheeses')
  ->join('cheese_types', 'cheeses.type_id', '=', 'cheese_types.id')
  ->join('cheese_textures', 'cheeses.texture_id', '=', 'cheese_textures.id')
  ->join('cheese_colors', 'cheeses.color_id', '=', 'cheese_colors.id')
  ->join('cheese_countries', 'cheeses.country_id', '=', 'cheese_countries.id')
  ->insert([
      'name' => $request->name,
      'flavor' => $request->flavor,
      'type_id' => $request->type,
      'texture_id' => $request->texture,
      'color_id' => $request->color,
      'country_id' => $request->country,
      'image' => $request->image,

  ]);

      return redirect('/cheeses/index');
    }


    public function edit($id=null)
    {
      $editCheese = Cheese::find($id);
      // $editCheese = Cheese::where('id',$request->query('id'))->first();
      $cheeses = Cheese::all();
      $types = CheeseType::all();
      $textures = CheeseTexture::all();
      $countries = CheeseCountry::all();
      $colors = CheeseColor::all();
      return view('cheeses/edit', [
        'editCheese' => $editCheese,
        'cheeses' => $cheeses,
        'types' => $types,
        'textures' => $textures,
        'countries' => $countries,
        'colors' => $colors
      ]);
  
    }
    public function update(Request $request){
      Cheese::find($request->id)
      ->update([
          'name' => $request->name,
          'flavor' => $request->flavor,
          'type_id' => $request->type,
          'texture_id' => $request->texture,
          'color_id' => $request->color,
          'country_id' => $request->country,
          'image' => $request->image,
      ]);
    
          return redirect('/cheeses/cheese/' . $request->id);
    }
    public function destroy(Request $request){
      Cheese::find($request->id)->delete();
      return redirect('/cheeses/index');
    }
    
}
