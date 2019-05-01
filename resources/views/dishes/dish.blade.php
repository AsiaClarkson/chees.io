@extends('layout')
@section('title', '{{$dishName}}')
@section('main')
<div class="page-header">
  <h1>{{$dish->dish_name}}</h1>
  </div>
  <div class='row'>
  <img src='{{$dish->dish_image}}' class='img-thumbnail col-sm-7' style='height:400px;'>
  <div class="card bg-light col-sm-4">
  <div class="card-body">
    <h4 class="card-title">{{$dish->dish_name}} Info</h4>
    <strong>Description</strong>
    <p class="card-text">{{$dish->description}}</p>
    <strong>Cheese(s) Used for {{$dish->dish_name}}</strong>
    <ul>
    @foreach($dish->cheeses as $cheese)
      <li>
        {{$cheese->name}}
      </li>
    @endforeach
    </ul>
    <br>
  </div>
</div>
</div>
  <br>
  <div class="btn-group btn-group-lg">
  <form action='/dishes/{{$dish->id}}/edit'>
  <input type="submit" class="btn btn-warning" value='Edit'>
  </form>
  <form action='/dishes/dish' method="POST" value='Edit'>
  @csrf
  @method('DELETE')
  <input type='hidden' id='id' name='id' value='{{$dish->id}}'>
  <input type="submit" class="btn btn-danger" value='Delete'>
  </form>
  </div><br>
@endsection
