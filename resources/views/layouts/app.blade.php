<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> beyondPyramids
    </title>

    <!-- scripts -->

    @push('scripts')
        <script src="{{ asset('js/app.js') }}" ></script>

        {{--      <script src="/js/app.js"></script>

              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

              <script
                  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                  crossorigin="anonymous"
              ></script>--}}

    @endpush
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

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
</head>
<body>
    <div id="app">
        <!--topnav-->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-warning"

            style="color: #fdba4d; height: 30px"
        >

            <p style="color: white;margin: 0px; font-family: optima;
    position: relative; left: 600px;" >Native</p>

        </nav>
        <!--middle-nav-->
        <nav class="navbar navbar-expand-lg navbar-light" style="height: 30 px; position: sticky; ">
            <div class="container-lg">
                <div class="logo">
                    <a href="#">
                        <img src="{{asset('storage/PBlogo.png')}} " width="152.1" height="50" />
                    </a>
                </div>
                <div class="bar">
                    <form action="{{ route('search') }}" method="GET">
                        <input class="searchbar" name="search" type="text" title="Search" />
                        <a type="submit">
                            <img class="voice" src="{{asset('storage/search.png')}}" title="Search"
                            /></a>
                    </form>



                </div>

                <div>
                    <a class="button btn" href="#">Home</a>
                    <a class="button btn" href="#">My places</a>
                    <a class="button btn" href="#">wishlist</a>
                    <a class="button btn" href="#">Account</a>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="nav-link button btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link button btn" href="{{ route('register') }}">{{ __('Register') }}</a>


                                <a class="dropdown-item" href="{{ route('logout') }}"

                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>                        </div>





                </div>

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        @guest


                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link button btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link button btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else



                            <li class=" dropdown nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"

                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
            </div>
        </nav>

        <!--bottom-nav-->
        <nav class="navbar  navbar-expand-lg" style=" background-color:rgb(112, 112, 112 ,0.3);height: 45px; ">
            <div class="container-lg">

                <div class="buttons">
                    <button class="buttons" type="button"  >Popular </button>
                    <button class="buttons" type="button">Cities</button>
                    <button class="buttons" type="button">History</button>
                    <button class="buttons" type="button">Nature</button>
                    <button class="buttons" type="button">Activities</button>
                    <button class="buttons" type="button" href="#fod" >food</button>

                </div>
            </div>
        </nav>

        <br>
        <br>
        <br>
        <br>



        <main class="py-4">

            @yield('content')
        </main>
    </div>






    @stack('scripts')

</body>


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

    <section style=" font-family: optima; text-align:center; margin:10px auto;"><p>Designed by Team 8 ❤︎ </p></section>
</footer>




</html>
