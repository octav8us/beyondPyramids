@extends('layouts.app')

@section('content')
<div class="container">
   <div >
       <section class="container pt-3">
           <div class="row">
               @if (Auth::user() && Auth::user()->role == 'admin')
                   <a href="/profile/{{$user->id}}/edit">edit cities</a>
               @endif
                   @if (Auth::user() && Auth::user()->role == 'admin')
                       <a href="/profile/{{$user->id}}/edit">edit pllaces</a>
                   @endif

               <div class="col-lg-12">
                   <h1>Bootstrap 4 Card Deck Slider</h1>
               </div>
           </div>
       </section>

   </div>
</div>
@endsection
