@extends('layout')
@section('title', 'Cheeses by Type')
@section('main')
<h2 class='text-center'>Cheeses by Type</h2>
<br>
<div class="card-columns">
@foreach($types as $type)
    <div class="card shadow-sm bg-light" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">{{$type->type}} Cheeses</h4>
                    <a href="/cheeses/type/{{$type->id}}" class="btn btn-warning mx-auto d-block">View Cheeses</a>
                </div>
            
        </div>
        @endforeach
    </div>
@endsection