@extends('layouts.app')

@section('content')
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

<!--    <link rel="stylesheet" href="{{ asset('css/home.css') }} " />
<div class="container">
           <div class="row">
               @if (Auth::user() && Auth::user()->role == 'admin')
                   <a href="/cities/create/">edit cities</a>
               @endif
                   @if (Auth::user() && Auth::user()->role == 'admin')
                       <a href="/places/create/">edit place</a>

                   @endif-->

 {{--              <div class="col-lg-12">
                   <h1>B P</h1>
               </div>

               <div class="container">

               </div>--}}
                   <a class="button btn" href="#" style="color:#14213D; position: relative; left: 100px; " ><h2>cities</h2></a>
                       @foreach($cities ?? '' as $city)

                           <!--card--->
                               <div href= "#" class="container" class="fullclick">
                                   <div class="img-container">
                                       <img src="/storage/{{$city ->image}}" alt="{{$city->name}}">
                                   </div>
                                   <ul class="social-media">
                                       <li><a href="card{{$city->id}}" title="more info"><i class="fa fa-google-plus"></i></a></li>
                                       <li><a href="#" title="add to wishlist" ><i class="fa fa-linkedin"></i></a></li>
                                       <li><a href="#" title="add to my places" ><i class="fa fa-instagram"></i></a></li>
                                   </ul>
                                   <div class="user-info">
                                       <h3 style=" font-family: optima;" >{{$city->name}}</h3>
                                       <span>20-july</span>
                                   </div>
                               </div>

                           <!--  light box-->

                           <div class="portfolio-lightbox" id="card{{$city->id}}">
                               <div class="portfolio-lightbox__content">
                                   <a href="#portfolio" class="close"></a>
                                   <img
                                       class="portfolio-lightbox__image"
                                       src="https://www.planetware.com/photos-large/EGY/egypt-cairo-pyramids-of-giza-and%20camels-2.jpg"
                                       width="550px"
                                       height="400px"
                                       alt=""
                                   />
                                   <div>
                                       <a class="button btn" href="#">Go</a>
                                       <h3 class="portfolio__title">{{$city -> name}}</h3>
                                   </div>
                                   <p class="portfolio__body">
                                       {{$city->Description}}                                   </p>
                               </div>
                           </div>

                     @endforeach






                                </div>




                            </div>


@endsection
