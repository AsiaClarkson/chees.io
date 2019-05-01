@extends('layout')
@section('title', 'Cheeses by Country')
@section('main')
<h2 class='text-center'>Cheeses by Country</h2>
<br>
<div class="card-columns">
@foreach($countries as $country)
    <div class="card shadow-sm bg-light" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Cheeses from {{$country->country}}</h4>
                    <a href="/cheeses/country?country={{urlencode($country->country)}}" class="btn btn-warning mx-auto d-block">View Cheeses</a>
                </div>
            
        </div>
        @endforeach
    </div>

@endsection