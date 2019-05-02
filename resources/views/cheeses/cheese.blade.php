@extends('layout')
@section('title', $cheese->name)
@section('main')
  <div class="page-header">
  <h1>{{$cheese->name}}</h1>
  </div>
  <div class='row'>
  <img src='{{$cheese->image}}' class='img-thumbnail col-sm-7' style='height:400px;'>
  <div class="card bg-light col-sm-4">
  <div class="card-body">
    <h4 class="card-title">{{$cheese->name}} Cheese Stats</h4>
    <p class="card-text">Flavor: {{$cheese->flavor}}</p>
    <br>
    <p class="card-text">Type: {{$cheese->cheeseType->type}}</p>
    <p class="card-text">Texture: {{$cheese->cheeseTexture->texture}}</p>
    <p class="card-text">Color: {{$cheese->cheeseColor->color}}</p>
    <p class="card-text">Country of Origin: {{$cheese->cheeseCountry->country}}</p>
    <strong>Dishes Containing {{$cheese->name}}</strong>
    <ul>
    @foreach($cheese->dishes as $dish)
      <li>
        {{$dish->dish_name}}
      </li>
    @endforeach
    </ul>

  </div>
</div>
</div>
  <br>
  @if (Auth::check())
  <div class="btn-group btn-group-lg">
  <form action='/cheeses/{{$cheese->id}}/edit'>
  <input type="submit" class="btn btn-warning" value='Edit'>
  </form>
  <form action='/cheeses/cheese' method="POST" value='Edit'>
  @csrf
  @method('DELETE')
  <input type='hidden' id='id' name='id' value='{{$cheese->id}}'>
  <input type="submit" class="btn btn-danger" value='Delete'>
  </form>
  </div><br>
  @else
  @endif
@endsection