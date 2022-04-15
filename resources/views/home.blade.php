@extends('layouts.app')

@section('content')
<div class="container">
   <div >
       <section class="container pt-3">
           <div class="row">
               @if (Auth::user() && Auth::user()->role == 'admin')
                   <a href="/cities/create/">edit cities</a>
               @endif
                   @if (Auth::user() && Auth::user()->role == 'admin')

                   @endif

               <div class="col-lg-12">
                   <h1>Bootstrap 4 Card Deck Slider</h1>
               </div>

               <div class="container">

               </div>

                   @foreach($cities as $city)



                   <div class="portfolio__item" id="portfolio">
                       <img
                           src="/storage/{{$city->image}}
                           width="300"
                           height="390"
                           alt=""
                           class="portfolio__image"
                       />
                       <div class="portfolio__desc">
                           <p class="portfolio__title">This is the title</p>
                           <a href="portfolio-item-{{$city->name}}" class="buttoon">More info</a>
                           <a href="#" class="button btn" style="font-size: 10 px">WishL</a>
                           <a href="#" class="button btn" style="font-size: 10 px">visited </a>
                       </div>
                   </div>

                       <!--light box1-->
                       <div class="portfolio-lightbox" id="portfolio-item-{{$city->name}}">
                           <div class="portfolio-lightbox__content">
                               <a href="#portfolio" class="close"></a>
                               <img
                                   class="portfolio-lightbox__image"
                                   src="https://www.planetware.com/photos-large/EGY/egypt-cairo-pyramids-of-giza-and%20camels-2.jpg"
                                   width="900"
                                   height="400"
                                   alt=""
                               />
                               <p class="portfolio__title">This is the title</p>
                               <p class="portfolio__body">
                                   This would be a description of the portfolio item
                               </p>
                           </div>
                       </div>
               </div>
           </div>
    ` @endforeach
    </section>

   </div>
</div>
@endsection
