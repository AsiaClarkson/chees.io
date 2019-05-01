<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function index()
    {
      $query = DB::table('users')
      ->join('cheeses', 'users.favorite_cheese', '=', 'cheeses.id')
      ->join('dishes', 'users.favorite_dish', '=', 'dishes.id')
      ;
      $users = $query->get();

  
      return view('/users', [
        'users' => $users
             ]);
    }
}
