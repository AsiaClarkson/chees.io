@extends('layout')
@section('title', 'Cheeses by Country')
@section('main')
<h1>&#x1f9c0; Cheeses by Country &#x1f9c0;</h1>

<table class='table'>
        <tr>
            <th>Cheeses by country</th>
        </tr>
        @foreach($countries as $country)
        <tr>
            <td>
            <a href='country={{urlencode($country->country)}}'>{{$country->country}}</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection