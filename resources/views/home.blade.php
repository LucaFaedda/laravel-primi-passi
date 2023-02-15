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
                background-color:#003554 ;
                font-family: 'Roboto', sans-serif;
            }

            header{
                height: 150px;
                background-color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            a{
                color: black;
                text-decoration: none;
            }
            
            .text-center{
                text-align: center;
            }

            .color-red{
                color: red;
            }

            .container{
                max-width: 1200px;
                margin: 0 auto;
                width: 100%;
                display: flex;
                align-items: center;
            }

            .logo{
                width: 30%;
            }

            .logo img{
                width: 50%;
                
            }

            .lista{
                width: 70%;
            }

            .unstyled-list{
                list-style: none;
                display:flex;
            }
            li{
                margin: 3rem;
                font-size: 20px;
            }

        </style>
       
    </head>
    <body >
        <div class='text-center'>
            <h1 class='color-red'>{{$hello_world}}</h1>
        </div>
        <header>
            <div class='container'>
                <div class='logo'>
                    <img src="https://www.universalmovies.it/wp-content/uploads/2022/06/il-signore-degli-anelli-gli-anelli-del-potere-empire.jpg" alt='logo'>
                </div>
                <div class='lista'>
                    <ul class='unstyled-list'>
                        @foreach ($data as $key => $value )
                            <li><a href="{{$value}}">{{str_replace("_", " " ,$key)}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </header>
    </body>
</html>
