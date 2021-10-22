@extends('layouts.layout')

@section('content')
    <section class="bg-gray-darker">
        <div class="swiper-variant-1">
            <div data-slide-effect="fade" data-min-height="600px" class="swiper-container swiper-slider">
                <div class="swiper-wrapper">
                    <div data-slide-bg="/images/home-slide-3-1920x800.jpg" class="swiper-slide">
                        <div class="swiper-slide-caption slide-caption-2 text-center">
                            <div class="shell">
                                <div class="range range-sm-center">
                                    <div class="cell-sm-11 cell-lg-9">
                                        <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="100"
                                            class="text-italic font-secondary text-white">Your Favourite</h5>
                                        <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="400"
                                            class="text-uppercase text-white offset-top-0">Tashi Delek</h2>
                                        <p data-caption-animate="fadeInUpSmall" data-caption-delay="700"
                                           class="text-white offset-top-18">Welcome to Tashi Delek, a place where
                                            you can order your favorite restaurant dishes, drinks, and desserts at
                                            affordable price. We are glad to offer you the best food in the area to
                                            everyone.</p><a href="{{$siteSetting->toastabUrl}}"
                                                            data-caption-animate="fadeInUpSmall"
                                                            data-caption-delay="1000"
                                                            class="btn btn-secondary btn-md btn-shape-circle offset-top-20">order
                                            online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-slide-bg="/images/home-slide-4-1920x800.jpg" class="swiper-slide">
                        <div class="swiper-slide-caption slide-caption-2 text-center">
                            <div class="shell">
                                <div class="range range-sm-center">
                                    <div class="cell-sm-10 cell-lg-8">
                                        <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="100"
                                            class="text-italic font-secondary text-white">Affordable Organic
                                            Food</h5>
                                        <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="400"
                                            class="text-uppercase text-white offset-top-0">Healthy Breakfasts</h2>
                                        <p data-caption-animate="fadeInUpSmall" data-caption-delay="700"
                                           class="text-white offset-top-18">Looking for fresh and tasty breakfasts
                                            and lunches? At Tashi Delek, you can order any kind of morning snack
                                            from local restaurants at reasonable prices without any extra
                                            charges.</p><a href="{{$siteSetting->toastabUrl}}"
                                                           data-caption-animate="fadeInUpSmall"
                                                           data-caption-delay="1000"
                                                           class="btn btn-secondary btn-md btn-shape-circle offset-top-20">order
                                            online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Navigation-->
                <div class="swiper-pagination-wrap">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-50 section-sm-100">
        <div class="shell text-center">
            <div class="range range-md-center">
                <div class="cell-md-10 cell-lg-7">
                    <h3>Welcome to Tashi Delek</h3>
                    <p>Our Chefs offer you perfect cooking, best served dishes with fresh ingredients and old recipes.
                        We have only carefully sourced and seasonal ingredients in our disposal to make rustic dishes.
                        We provide you with daily Mo:Mo, Tandoori, Vegetable Korma and many more.</p>
                </div>
            </div>
        </div>
        {{--<div data-arrows="true" data-loop="true" data-dots="false" data-swipe="false" data-autoplay="false"
             data-items="1" data-lg-items="3" data-xl-items="3" data-center-mode="true" data-center-padding="0.0"
             class="slick-slider carousel-center-mode offset-top-30">
            <div class="item">
                <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img
                            src="/images/index-1-1008x585.jpg" alt="" width="1008" height="585"
                            class="img-responsive"/>
                        <div class="caption">
                            <div class="title-wrap text-xs-left">
                                <div class="unit unit-xs-horizontal unit-spacing-xxs unit-middle">
                                    <div class="unit-left">
                                        <h1>2</h1>
                                    </div>
                                    <div class="unit-body">
                                        <h4 class="text-italic"><span class="text-white">Burgers</span><span
                                                class="reveal-block">at the price of one</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block"><span>$</span><span>17</span><span>99</span></div>
                        </div>
                    </a></div>
            </div>
            <div class="item">
                <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img
                            src="/images/index-2-1008x585.jpg" alt="" width="1008" height="585"
                            class="img-responsive"/>
                        <div class="caption">
                            <div class="title-wrap">
                                <h2 class="text-italic">Mexican Day</h2>
                                <div class="title-desc">
                                    <p class="big text-uppercase">Every Friday</p>
                                </div>
                            </div>
                            <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                        </div>
                    </a></div>
            </div>
            <div class="item">
                <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img
                            src="/images/index-3-1008x585.jpg" alt="" width="1008" height="585"
                            class="img-responsive"/>
                        <div class="caption">
                            <div class="title-wrap">
                                <h2 class="text-italic">Fresh menu</h2>
                                <div class="title-desc">
                                    <p class="big text-uppercase">Burger + Salad + Drink</p>
                                </div>
                            </div>
                            <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                        </div>
                    </a></div>
            </div>
            <div class="item">
                <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img
                            src="/images/index-3-1008x585.jpg" alt="" width="1008" height="585"
                            class="img-responsive"/>
                        <div class="caption">
                            <div class="title-wrap">
                                <h2 class="text-italic">Fresh menu</h2>
                                <div class="title-desc">
                                    <p class="big text-uppercase">Burger + Salad + Drink</p>
                                </div>
                            </div>
                            <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                        </div>
                    </a></div>
            </div>
        </div>--}}
    </section>
    <section class="section-50 section-sm-top-90 section-sm-bottom-100 bg-image-6">
        <div class="shell text-center">
            <h3>Our Menu</h3>
            <div class="range range-xs-center">
                @foreach($menus->sortBy('row_order') as $menu)
                    @php $class=null; if($loop->iteration == 3) $class = "offset-top-50 offset-md-top-0" ; @endphp
                    @php if($loop->iteration > 3) $class = "offset-top-50 " ; @endphp
                    @if($menu->items_count)
                        <div class="cell-sm-6 cell-md-4 {{$class}}">
                            <div class="menu-variant-1">
                                @if($menu->thumbnail)
                                    <img src="{{$menu->thumbnail_url}}" alt="" style="width: 310px; height: 210px"
                                         class="img-responsive reveal-inline-block"/>
                                @else
                                    <img src="https://ui-avatars.com/api/?background=EFA802&color=fff&name={{$menu->slug}}" alt="" style="width:250px; height: 210px"
                                         class="img-responsive reveal-inline-block"/>
                                @endif
                                <div class="caption">
                                    <h5 class="title">
                                        <a href="{{url("menu/$menu->slug")}}"
                                           class="link-white">{{$menu->title}}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <section class="section-50 section-sm-100" style="background-color:#F16121">
        <div class="shell text-center">
            <a href="{{$siteSetting->toastabUrl}}">
                <div class="text-center">
                    <img src="{{asset('images/dinning.png')}}" alt="dinning-tashi-delek">
                    <h2>Make Online Reservation</h2>
                    <h3>Click here</h3>
                    <h4>or</h4>
                    <h5>{{$siteSetting->forOrder}}</h5>
                </div>
            </a>
        </div>
    </section>

@endsection
