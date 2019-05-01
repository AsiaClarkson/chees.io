@extends('layout')
@section('title', 'Dishes')
@section('main')
<h2 class='text-center'>&#x1f9c0; All Dishes &#x1f9c0;</h2>
<br>
<form action='/dishes/create'>
    <input type="submit" class="btn btn-warning mx-auto d-block" value='Add A New Dish'>
</form>
<br>
<div class="card-columns">
@foreach($dishes as $dish)
    <div class="card shadow-sm" style="width:400px">
        <img class="card-img-top" src="{{$dish->dish_image}}" alt="Card image" style="width:100%; height:300px;">
        <div class="card-body">
            <h4 class="card-title">{{$dish->dish_name}}</h4>
            <p class="card-text">{{$dish->description}}</p>
            <a href="/dishes/dish/{{$dish->id}}" class="btn btn-warning mx-auto d-block">More Info</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
