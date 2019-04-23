@extends('layout')
@section('title', 'Add a Cheese')
@section('main')
<h1>Add a new cheese!</h1>
<form action="/cheeses/index" method="post">
<button type="submit" class="btn btn-primary">Add That Cheese!</button>
</form>
@endsection