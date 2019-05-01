@extends('layout')
@section('title', 'Edit a Dish')
@section('main')
<h2 class='text-center'>Edit {{$editDish->dish_name}}</h2>
<form method="post">
@csrf
<input type='hidden' id='id' name='id' value='{{$editDish->id}}'>
    <div class='form-group'>
    <label for="dish_name">Dish Name</label>
    <input type="text" id="dish_name" name="dish_name" class="form-control" value="{{$editDish->dish_name}}">
    <br>
    <label for="description">Description</label>
    <textarea id="description" name="description" class="form-control">{{$editDish->description}}</textarea>
    <br>
    <label for="cheese">Cheese(s) Used</label>
    <select name="cheese[]" class="form-control" multiple="multiple">
        @foreach($cheeses as $cheese)
        @if($editDish->cheeses->contains($cheese)))
        <option value="{{$cheese->id}}" selected>
            {{$cheese->name}}
        </option>
        @else
        <option value="{{$cheese->id}}">
            {{$cheese->name}}
        </option>
        @endif
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('cheese')}}</small>
    <br>
    <label for="image">Image URL</label>
    <input type="text" id="dish_image" name="dish_image" class="form-control" value="{{$editDish->dish_image}}">
    <br>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>


</form>
@endsection
