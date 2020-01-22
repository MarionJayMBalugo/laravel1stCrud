@extends('layout.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Laravel</title>

    </head>
    <body>
    @yield('sidebar')
@section('content')
<table border=1 style="border-color:violet"   table align="center" >
    <tr>
    <th>first_name</th>
    <th>middle_name</th>
    <th>last_name</th>
    <th>age</th>
    <th>address</th>  
    <th>action</th>  
    </tr>
    @foreach($result as $res)
        <tr>
            <td>{{$res['first_name']}}</td>
            <td>{{$res['middle_name']}}</td>
            <td>{{$res['last_name']}}</td>
            <td>{{$res['age']}}</td>
            <td>{{$res['address']}}</td>      
            <td><a href="deleteInfo/{{$res['id']}}"><button>delete</button></a><a href="updateInfo/{{$res['id']}}"> <button>edit</button></a></td>
        </tr>
    @endforeach
    </table>
@endsection    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>
