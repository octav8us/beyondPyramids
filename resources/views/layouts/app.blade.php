<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> beyondPyramids
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous"
            />
            <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous"
            />
            <link rel="stylesheet" href="style.css " />
            <title>beyond pyramids</title>
        </head>
        <body>
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-warning"
            style="color: #fdba4d; height: 30px"
        >
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light" style="height: 30 px">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="img/Pasted Graphic.png" width="152.1" height="50" />
                    </a>
                </div>
                <div class="bar">
                    <input class="searchbar" type="text" title="Search" />
                    <a href="#">
                        <img class="voice" src="img/icons8-search-30.png" title="Search"
                        /></a>
                </div>

                <div>
                    <a class="button btn" href="#">Home</a>
                    <a class="button btn" href="#">My places</a>
                    <a class="button btn" href="#">wishlist</a>
                    <a class="button btn" href="#">Account</a>



                </div>
            </div>
        </nav>
        <nav class="navbar  navbar-expand-lg" style=" background-color:rgb(112, 112, 112 ,0.3);height: 45px; ">
            <div class="container">



                <div class="buttons">
                    <button class="buttons" type="button">Popular </button>
                    <button class="buttons" type="button">Cities</button>
                    <button class="buttons" type="button">History</button>
                    <button class="buttons" type="button">Nature</button>
                    <button class="buttons" type="button">Activities</button>
                    <button class="buttons" type="button">Vacation</button>
                    <button class="buttons" type="button">food</button>
                </div>
                </li>
            </div>
        </nav>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        </body>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
