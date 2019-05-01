@extends('layout')
@section('title', 'Add a Dish')
@section('main')
<h2 class='text-center'>Add a New Dish!</h2>
<form action="/dishes/index" method="post">
@csrf
    <div class='form-group'>
    <label for="dish_name">Dish Name</label>
    <input type="text" id="dish_name" name="dish_name" class="form-control" value="{{old('dish_name')}}">
    <small class="text-danger">{{$errors->first('dish_name')}}</small>
    <br>
    <label for="description">Description</label>
    <textarea id="description" name="description" class="form-control"></textarea>
    <br>
    <label for="cheese">Cheese(s) Used</label>
    <select name="cheese[]" class="form-control" multiple="multiple">
        @foreach($cheeses as $cheese)
        <option value="{{$cheese->id}}">
            {{$cheese->name}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('cheese')}}</small>
    <br>
    <label for="image">Image URL</label>
    <input type="text" id="dish_image" name="dish_image" class="form-control" value="{{old('dish_image')}}">
    <small class="text-danger">{{$errors->first('dish_image')}}</small>
    <br>
    </div>
    <button type="submit" class="btn btn-warning">Add That Dish!</button>


</form>
@endsection
