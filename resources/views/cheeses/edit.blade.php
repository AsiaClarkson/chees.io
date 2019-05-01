@extends('layout')
@section('title', 'Update a Cheese')
@section('main')
<h2 class='text-center'>Update {{$editCheese->name}}</h2>
<form method="post">
    @csrf
    <input type='hidden' id='id' name='id' value='{{$editCheese->id}}'>
    <div class='form-group'>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" value='{{$editCheese->name}}'>
        <br>
        <label for="flavor">Flavor Description</label>
        <textarea id="flavor" name="flavor" class="form-control">{{$editCheese->flavor}}</textarea>
        <br>
        <label for="type">Cheese Type</label>
        <select name="type" class="form-control">
            @foreach($types as $type)
            @if ($editCheese->cheeseType == $type)
            <option value="{{$type->id}}" selected>{{$type->type}}</option>
            @else
            <option value="{{$type->id}}">{{$type->type}}</option>
            @endif
            @endforeach
        </select>
        <br>
        <label for="texture">Cheese Texture</label>
        <select name="texture" class="form-control">
            @foreach($textures as $texture)
            @if ($editCheese->cheeseTexture == $texture)
            <option value="{{$texture->id}}" selected>{{$texture->texture}}</option>
            @else
            <option value="{{$texture->id}}">{{$texture->texture}}</option>
            @endif
            @endforeach
        </select>
        <br>
        <label for="color">Cheese Color</label>
        <select name="color" class="form-control">
            @foreach($colors as $color)
            @if ($editCheese->cheeseColor == $color)
            <option value="{{$color->id}}" selected>{{$color->color}}</option>
            @else
            <option value="{{$color->id}}">{{$color->color}}</option>
            @endif
            @endforeach
        </select>
        <br>
        <label for="country">Country of Origin</label>
        <select name="country" class="form-control">
            @foreach($countries as $country)
            @if ($editCheese->cheeseCountry == $country)
            <option value="{{$country->id}}" selected>{{$country->country}}</option>
            @else
            <option value="{{$country->id}}">{{$country->country}}</option>
            @endif
            @endforeach
        </select>
        <br>
        <label for="image">Image URL</label>
        <input type="text" id="image" name="image" class="form-control" value="{{$editCheese->image}}">
        <br>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>


</form>
@endsection
