<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
    <h2>LogIn</h2>
        <form action="login" method="get">
        @csrf
            <input type="text" name="name" id="name" placeholder="enter name">
            <input type="password" name="password" id="password" placeholder="enter password">
            <input type="text" name="name" id="name" placeholder="enter name">
            <input type="password" name="password" id="password" placeholder="enter password">
            
            
        </form>
    </body>
</html>
