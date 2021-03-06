@extends('layout')
@section('title', 'Country')
@section('main')
<h2 class='text-center'>Cheeses from {{$country->country}}</h2>
<br>
<div class="card-columns">
    @forelse($cheeses as $cheese)
    <div class="card shadow-sm" style="width:400px">
        <img class="card-img-top" src="{{$cheese->image}}" alt="Card image" style="width:100%; height:300px;">
        <div class="card-body">
            <h4 class="card-title">{{$cheese->name}}</h4>
            <p class="card-text">{{$cheese->flavor}}</p>
            <a href="/cheeses/cheese/{{$cheese->id}}" class="btn btn-warning mx-auto d-block"
                style='background-color:{{$cheese->hexcode}}'>More Info</a>
        </div>
    </div>
    @empty
    <h2 class='text-center'>Sorry, no Cheeses from {{$country->country}} yet!</h2>
    <form action='/cheeses/create'>
    <input type="submit" class="btn btn-warning" value='Add A New Cheese'>
    </form>
    @endforelse
</div>
@endsection