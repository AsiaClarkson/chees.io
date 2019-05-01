<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Dish;
use App\Cheese;
use Validator;


class DishesController extends Controller
{
    public function index()
    {
      $dishes = Dish::all();
  
      return view('dishes/index', [
        'dishes' => $dishes
             ]);
    }

    public function singleDish($id=null){
        $dish = Dish::find($id);
    //     $query = DB::table('dishes')
    //     ;
    //     IF ($request->query('dish')){
    //       $query->where('dish_name', '=', $request->query('dish'));
    //   }
    //     $dishes = $query->get();
    //     $dishName = $request->query('dish');
  
        return view('dishes/dish', [
          'dish' => $dish
               ]);
  
      }
      
      public function create()
      {
        $cheeses = Cheese::all();

  
        return view('dishes/create',[
        'cheeses' => $cheeses,
        ]);
      }

      public function store(Request $request){
        $input = $request->all();
  
        $validation = Validator::make($input, [
            'dish_name' => 'unique:dishes,dish_name|required|min:3',
            'description' => 'required|min:3',
            'cheese' => 'required',
            'dish_image' => 'url'
        ]);
  
          //if validation fails, redirect back to for w/ error message
          if($validation->fails()){
            return redirect('/dishes/create')
            ->withInput()
            ->withErrors($validation);
        }
  
    $newDishId = DB::table('dishes')
    ->join('cheese_dish', 'dishes.id', '=', 'cheese_dish.dish_id')
    ->insertGetId([
        'dish_name' => $request->dish_name,
        'description' => $request->description,
        'dish_image' => $request->dish_image
    ]);
    Dish::find($newDishId)->cheeses()->attach($request->cheese);
    /*foreach ($request->cheese as $cheeseId) {
        DB::table('cheese_dish')
        ->join('dishes', 'dishes.id', '=', 'cheese_dish.dish_id')
        ->join('cheeses', 'cheeses.id', '=', 'cheese_dish.cheese_id')
        ->insert([
            'cheese_id' => $cheeseId,
            'dish_id' => $newDishId
        ]);
    }*/
    
  
        return redirect('/dishes/index');
      }

      public function edit($id=null)
      {
        $editDish= Dish::find($id);
        // $editCheese = Cheese::where('id',$request->query('id'))->first();
        $cheeses = Cheese::all();
        return view('dishes/edit', [
          'editDish' => $editDish,
          'cheeses' => $cheeses,

        ]);
    }
    public function update(Request $request){
        Dish::find($request->id)
        ->update([
            'dish_name' => $request->dish_name,
            'description' => $request->description,
            'dish_image' => $request->dish_image
        ]);
        Dish::find($request->id)->cheeses()->detach();
        Dish::find($request->id)->cheeses()->attach($request->cheese);
      
            return redirect('/dishes/dish/' . $request->id);
      }
      public function destroy(Request $request){
        $deleteDish = Dish::find($request->id);
        $deleteDish->cheeses()->detach();
        $deleteDish->delete();
        return redirect('/dishes/index');
      }
      
  }
