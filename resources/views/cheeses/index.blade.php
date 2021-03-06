@extends('layout')
@section('title', 'Cheeses')
@section('main')
<h2 class='text-center'>&#x1f9c0; All Cheeses &#x1f9c0;</h2>
<br>
<form action='/cheeses/create'>
    <button type="submit" class="btn btn-warning mx-auto d-block">Add A New Cheese</button>
</form>
<br>
<div class="card-columns">
    @foreach($cheeses as $cheese)
    <div class="card shadow-sm" style="width:400px">
        <img class="card-img-top" src="{{$cheese->image}}" alt="Card image" style="width:100%; height:300px;">
        <div class="card-body">
            <h4 class="card-title">{{$cheese->name}}</h4>
            <p class="card-text">{{$cheese->flavor}}</p>
            <a href="/cheeses/cheese/{{$cheese->id}}" class="btn btn-warning mx-auto d-block"
                style='background-color:{{$cheese->hexcode}}'>More Info</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
