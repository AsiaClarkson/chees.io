@extends('layout')
@section('title', 'Add a Cheese')
@section('main')
<h2 class='text-center'>Add a New Cheese!</h2>
<form action="/cheeses/index" method="post">
@csrf
    <div class='form-group'>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
    <small class="text-danger">{{$errors->first('name')}}</small>
    <br>
    <label for="flavor">Flavor Description</label>
    <textarea id="flavor" name="flavor" class="form-control"></textarea>
    <br>
    <label for="type">Cheese Type</label>
    <select name="type" class="form-control">
        @foreach($types as $type)
        <option value="{{$type->id}}">
            {{$type->type}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('type')}}</small>
    <br>
    <label for="texutre">Cheese Texture</label>
    <select name="texture" class="form-control">
        @foreach($textures as $texture)
        <option value="{{$texture->id}}">
            {{$texture->texture}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('texture')}}</small>
    <br>
    <label for="color">Cheese Color</label>
    <select name="color" class="form-control">
        @foreach($colors as $color)
        <option value="{{$color->id}}">
            {{$color->color}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('color')}}</small>
    <br>
    <label for="country">Country of Origin</label>
    <select name="country" class="form-control">
        @foreach($countries as $country)
        <option value="{{$country->id}}">
            {{$country->country}}
        </option>
        @endforeach
    </select>
    <small class="text-danger">{{$errors->first('country')}}</small>
    <br>
    <label for="image">Image URL</label>
    <input type="text" id="image" name="image" class="form-control" value="{{old('image')}}">
    <small class="text-danger">{{$errors->first('image')}}</small>
    <br>
    </div>
    <button type="submit" class="btn btn-warning">Add That Cheese!</button>


</form>
@endsection
