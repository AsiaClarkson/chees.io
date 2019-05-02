@extends('layout')

@section('title', 'Sign Up')

@section('main')
  <h1>Sign Up</h1>
  <p>Already have an account? Please <a href="/login">Login</a></p>
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="fname" id="fname" name="fname" class="form-control">
    </div>
    <div class="form-group">
      <label for="lname">Last Name</label>
      <input type="lname" id="lname" name="lname" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control">
    </div>
    <label for="cheese">Favorite Cheese</label>
    <select name="cheese" class="form-control">
        @foreach($cheeses as $cheese)
        <option value="{{$cheese->id}}">
            {{$cheese->name}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('cheese')}}</small>
    <br>
    <label for="cheese">Favorite Dish</label>
    <select name="dish" class="form-control">
        @foreach($dishes as $dish)
        <option value="{{$dish->id}}">
            {{$dish->dish_name}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('dish')}}</small>
    <br>
    <input type="submit" value="Sign Up" class="btn btn-warning">
  </form>
@endsection