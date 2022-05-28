<div  class=" media-scroller " >
    @foreach($places ?? '' as $place)

        <!--card--->
        <div href= "#" class="container fullclick ">
            <div class="img-container">
                <img src="/storage/{{$place ->image}}" alt="{{$place->name}}"

                >
            </div>
            <ul class="social-media">
                <li><a onclick="{{}}" href="#placeCard{{$place->id}}" title="more info">
                        <i class="fa fa-google-plus"></i></a></li>
                <li><a href="###" title="add to wishlist" ><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#####" title="add to my places" ><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="user-info">
                <h3 style=" font-family: optima;" >{{$place->name}}</h3>
                <span>20-july</span>
            </div>
        </div>

        <!--  light box-->

        <div class="portfolio-lightbox" id="placeCard{{$place->id}}">
            <div class="portfolio-lightbox__content">
                <a href="#portfolio" class="close"></a>
                <img
                    src="/storage/{{$place ->image}}"
                    class="portfolio-lightbox__image"
                    width="550px"
                    height="400px"
                    alt=""
                />
                <div>
                    <a class="button btn" href="#">Go</a>
                    <place_fav_button place-id="{{$place->id}}"  >

                    </place_fav_button>
                    <h3 class="portfolio__title">{{$place -> name}}</h3>
                </div>
                <p class="portfolio__body">
                    {{$place->Description}}                                   </p>
            </div>
        </div>

    @endforeach



</div>
