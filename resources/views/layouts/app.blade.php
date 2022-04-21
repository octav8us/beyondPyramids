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
    <link href="{{ asset('css/bar.css') }}" rel="stylesheet">

<!--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
-->
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
            <link rel="stylesheet" href="{{ asset('css/bar.css') }}" />
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
                        <img src="{{asset('storage/PBlogo.png')}} " width="152.1" height="50" />
                    </a>
                </div>
                <div class="bar">
                    <input class="searchbar" type="text" title="Search" />
                    <a href="#">
                        <img class="voice" src="{{asset('storage/search.png')}}" title="Search"
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
           </div>
        </nav>

        @stack('scripts')
        @push('scripts')
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"
            ></script>
        @endpush


        </body>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<!--footer-->


<!----------- Footer ------------>
<footer class="footer-bs" style=" font-family:optima; background-color: #d4d4d4; padding: 50px; ">
    <div class="row" >
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <h2>beyond pyramids</h2>
            <p style="color: #14213D;" > we here aim to show you the every side of Egypt,
                in order to help you get the full experience very easy and with a botton click</p>

        </div>
        <div class="col-md-4 footer-nav animated fadeInUp ">
            <h4 >our team</h4>
            <div class="col-md-6">
                <ul class="pages">
                    <li><a href="#">Omnia</a></li>
                    <li><a href="#">Magdy</a></li>
                    <li><a href="#">Hussien</a></li>
                </ul>
            </div>

        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>

    </div>
    <br>

    <section style=" font-family: optima; text-align:center; margin:10px auto;"><p>Designed by Team 8 ❤︎ </a></p></section>
</footer>




</html>
