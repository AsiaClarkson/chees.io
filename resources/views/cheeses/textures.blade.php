@extends('layout')
@section('title', 'Cheeses by Texture')
@section('main')
<h2 class='text-center'>Cheeses by Texture</h2>
<br>
<div class="card-columns">
@foreach($textures as $texture)
    <div class="card shadow-sm bg-light" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">{{$texture->texture}} Cheeses</h4>
                    <a href="/cheeses/texture?texture={{urlencode($texture->texture)}}" class="btn btn-warning mx-auto d-block">View Cheeses</a>
                </div>
            
        </div>
        @endforeach
    </div>
@endsection