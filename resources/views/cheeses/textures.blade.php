@extends('layout')
@section('title', 'Cheeses by Texture')
@section('main')
<h1>&#x1f9c0; Cheeses by Texture &#x1f9c0;</h1>

<table class='table'>
        <tr>
            <th>Cheeses by Texture</th>
        </tr>
        @foreach($textures as $texture)
        <tr>
            <td>
            <a href='texture={{urlencode($texture->texture)}}'>{{$texture->texture}}</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection