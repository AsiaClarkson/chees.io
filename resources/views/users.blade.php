@extends('layout')
@section('title', 'Users')
@section('main')
<h2 class="text-center">&#x1f9c0; All Users &#x1f9c0;</h2>
<br>
<div class="card-columns">
    @foreach($users as $user)
    <div class="card shadow-sm bg-light" style="width:400px">
        <div class="card-body">
            <h4 class="card-title text-warning">{{$user->fname}} {{$user->lname}}</h4>
            <p class="card-text text-center"> Favorite Cheese: {{$user->name}}</p>
            <img class="mx-auto d-block" src="{{$user->image}}" alt="Card image" style="width:100%; height:200px;">
            <br>
            <p class="card-text text-center"> Favorite Dish: {{$user->dish_name}}</p>
            <img class="mx-auto d-block" src="{{$user->dish_image}}" alt="Card image" style="width:100%; height:200px;">
            <br>
            <!-- <form action='/users' method="POST" value='Edit'>
                @csrf
                @method('DELETE')
                <input type='hidden' id='id' name='id' value='{{$user->id}}'>
                <input type="submit" class="btn btn-danger" value='Delete'>
            </form> -->
        </div>
    </div>
    @endforeach
</div>

@endsection
