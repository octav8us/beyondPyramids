<div  class=" media-scroller " >
    @foreach($cities ?? '' as $city)

        <!--card--->
        <div href= "#" class="container fullclick ">
            <div class="img-container">
                <img src="/storage/{{$city ->image}}" alt="{{$city->name}}"

                >
            </div>
            <ul class="social-media">
                <li><a href="#card{{$city->id}}" title="more info">
                        <i class="fa fa-google-plus"></i></a></li>
                <li><a href="###" title="add to wishlist" ><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#####" title="add to my places" ><i class="fa fa-instagram"></i></a></li>
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
                    src="/storage/{{$city ->image}}"
                    class="portfolio-lightbox__image"
                    width="550px"
                    height="400px"
                    alt=""
                />
                <div>
                    <a class="button btn" href="#">Go</a>
                    <city_fav_button city-id="{{$city->id}}" >

                    </city_fav_button>
                    <h3 class="portfolio__title">{{$city -> name}}</h3>
                </div>
                <p class="portfolio__body">
                    {{$city->Description}}                                   </p>
            </div>
        </div>

    @endforeach



</div>
