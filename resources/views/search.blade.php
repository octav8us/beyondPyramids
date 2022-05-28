@extends('layouts.app')



@section('content')
@if($places->isNotEmpty())
    @include('placesArray' , ['places' => $places ] )

@else
    <div>
        <h2>No places found</h2>
    </div>
@endif


@if($cities->isNotEmpty())

    @include('cityArray' , ['cities' => $cities  ])
@else
    <div>
        <h2>No cities found</h2>
    </div>
@endif


@endsection

