@extends('layout')
@section('title', 'Cheeses by Color')
@section('main')


<h2 class='text-center'>Cheeses by Color</h2>
<br>
<div class="card-columns">
    @foreach($colors as $color)
    <div class="card shadow-sm" style="width:400px">
        <div class="card-img-top" style="width:100%;background-color:{{$color->hexcode}};">
                <div class="card-body">
                    <h4 class="card-title">{{$color->color}} Cheeses</h4>
                    <a href="/cheeses/color?color={{urlencode($color->color)}}" class="btn btn-light mx-auto d-block">View Cheeses</a>
                </div>
            
        </div>
    </div>
@endforeach

@endsection
