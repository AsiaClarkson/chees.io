@extends('layout')
@section('title', 'Cheeses by Color')
@section('main')
<h1>&#x1f9c0; Cheeses by Color &#x1f9c0;</h1>

<table class='table'>
    <tr>
        <th>Cheeses by Color</th>
    </tr>
    @foreach($colors as $color)
    <tr>
        <td>
            <div style='width:50px;height: 50px; background-color:{{$color->hexcode}};'></div>
        </td>
        <td>
            <a href='color={{urlencode($color->color)}}'>{{$color->color}}</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
