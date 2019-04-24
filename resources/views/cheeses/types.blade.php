@extends('layout')
@section('title', 'Cheeses by Type')
@section('main')
<h1>&#x1f9c0; Cheeses by Type &#x1f9c0;</h1>

<table class='table'>
        <tr>
            <th>Cheeses by Type</th>
        </tr>
        @foreach($types as $type)
        <tr>
            <td>
            <a href='type={{urlencode($type->type)}}'>{{$type->type}}</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection