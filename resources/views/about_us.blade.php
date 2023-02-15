<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Style -->

        <style>
            body{
                background-color:#c3acce;
                font-family: 'Roboto', sans-serif;
            }
            .text-center{
                text-align: center;
            }


        </style>
       
    </head>
    <body >
        <div class='text-center'>
            <h1>{{$title}}</h1>
        </div>
        <p>Chi siamo: {{$data['name']}}</p>
        <p>Linguaggi imparati: {{$data['language']}}</p>
    </body>
</html>
