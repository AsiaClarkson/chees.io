@extends('layout')
@section('title', 'Cheeses')
@section('main')
<h1>&#x1f9c0; All Cheeses &#x1f9c0;</h1>

<table class='table'>
        <tr>
            <th>Cheeses</th>
        </tr>
        @foreach($cheeses as $cheese)
        <tr>
            <td>
            <img style="width: 200px" src='{{$cheese->image}}'>
            </td>
            <td>
            <a href='tracks?cheese={{urlencode($cheese->name)}}'>{{$cheese->name}}</a>
            </td>
            <td>
            <div style='width:50px;height: 50px; background-color:{{$cheese->hexcode}};'></div>
            </td>
            <td>
            <a href='/genres/{{$cheese->id}}/edit'>Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
<form action="/cheeses/create">
<button type="submit" class="btn btn-primary">Add A New Cheese</button>
</form>
@endsection