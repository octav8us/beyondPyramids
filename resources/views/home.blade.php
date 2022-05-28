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
    {{--
        <link rel="stylesheet" href="{{ asset('css/home.css') }} " />
    --}}
    <div class="row">
        @if (Auth::user() && Auth::user()->role == 'admin')
            <a href="/cities/create/">edit cities</a>
        @endif
        @if (Auth::user() && Auth::user()->role == 'admin')
            <a href="/places/create/">edit place</a>

        @endif
    </div>

    <div class="col-lg-12  ">
        <h1>B P</h1>
    </div>


    <a class="button btn" href="#" style="color:#14213D; position: relative; left: 100px; "><h2>cities</h2></a>
    @include('cityArray' , ['cities' => $cities  , 'cityFavourites'=>$cityFavourites])

    @include('placesArray' , ['places' => $places ,  'placeFavourites'=>$placeFavourites] )

@endsection
