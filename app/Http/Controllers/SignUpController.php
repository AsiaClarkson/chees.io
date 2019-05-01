<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cheese;
use App\Dish;
use Hash;
use Auth;

class SignUpController extends Controller
{
    public function index(){
        $dishes = Dish::all();
        $cheeses = Cheese::all();

        return view('/signup', [
            'cheeses' => $cheeses,
            'dishes' => $dishes
                 ]);
    }
    public function signup(){

        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password')); //bcrypt
        $user->favorite_cheese = request('cheese');
        $user->favorite_dish = request('dish');
        $user->save();

        Auth::login($user);

        return redirect('/cheeses/index');

    }
}
