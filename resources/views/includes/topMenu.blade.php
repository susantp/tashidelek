<div class="rd-navbar-wrap rd-navbar-default">
    <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
         data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false"
         data-md-stick-up-offset="100px" data-lg-stick-up-offset="150px" class="rd-navbar">
        <div class="shell shell-fluid">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-nav-wrap-outer">
                    <div class="rd-navbar-aside">
                        <div class="rd-navbar-aside-content">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel rd-navbar-aside-left">
                                <!-- RD Navbar Toggle-->
                                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle">
                                    <span></span></button>
                                <!-- RD Navbar Brand--><a href="{{url('/')}}" class="rd-navbar-brand brand">
                                    <div class="brand-logo"><img src="{{secure_asset('images/logo.png')}}"
                                                                 alt="tashidelek-logo" width="232" height="49"/>
                                    </div>
                                </a>
                            </div>
                            <div class="rd-navbar-aside-right">
                                <!-- RD Navbar Aside-->
                                <ul class="list-links list-inline text-left">
                                    <li>
                                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                            <div class="unit-left"><span
                                                    class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-map-marker text-middle"></span>
                                            </div>
                                            <div class="unit-body">
                                                <address class="contact-info">
                                                    <a href="#"
                                                       class="link-default link-xs">{!! $siteSetting->address!!}</a>
                                                </address>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                            <div class="unit-left"><span
                                                    class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span>
                                            </div>
                                            <div class="unit-body">
                                                <address class="contact-info"><a href="callto:#"
                                                                                 class="link-default link-xs">{{$siteSetting->forOrder}}</a><span
                                                        class="reveal-block text-base link-xs">{{$siteSetting->openingHours}}</span>
                                                </address>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="list-inline list-inline-sm">
                                            <li><a href="{{$siteSetting->instagramUrl}}"
                                                   class="link-silver-light"><span
                                                        class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                                            <li><a href="{{$siteSetting->facebookUrl}}" class="link-silver-light"><span
                                                        class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                                            <li><a href="{{$siteSetting->yelpUrl}}"
                                                   class="link-silver-light"><span
                                                        class="icon icon-sm-mod-1 fa fa-yelp"></span></a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Shop-->

                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Home</a>
                        </li>
                        <li><a href="{{url('about')}}">About Us</a>
                        </li>
                        <li><a href="#">Menu</a>
                            <!-- RD Navbar Dropdown-->
                            <ul class="rd-navbar-dropdown menu-img-wrap">
                                @foreach($menus->sortBy('row_order') as $menu)
                                    @if($menu->items_count)
                                        <li class="menu-img">
                                            <a href='{{url("menu/$menu->slug")}}'>
                                                @if($menu->thumbnail)
                                                    <img src="{{asset("storage/menuImages/$menu->thumbnail")}}"
                                                         alt=""
                                                         width="50">
                                                    <span>{{$menu->title}}</span>
                                            </a>
                                            @else
                                                <img src="https://via.placeholder.com/88/60" alt="" width="88"
                                                     height="60">
                                                <span>{{$menu->title}}</span></a>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>

                        {{--                        <li><a href="{{url('gallery')}}">Gallery</a></li>--}}
                        <li><a href="{{route('contact')}}">Contacts</a>
                        </li>
                        <li><a href="{{route('reservation')}}">Request Reservation</a></li>

                    </ul>
                    <div class="rd-navbar-aside-right">
                        <ul class="list-links list-inline text-left">
                            <li>
                                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                    <div class="unit-left"><span
                                            class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-map-marker text-middle"></span>
                                    </div>
                                    <div class="unit-body">
                                        <address class="contact-info"><a href="#"
                                                                         class="link-default link-xs">{{$siteSetting->address}}</a>
                                        </address>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                    <div class="unit-left"><span
                                            class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span>
                                    </div>
                                    <div class="unit-body">
                                        <address class="contact-info"><a href="callto:#"
                                                                         class="link-default link-xs">{{$siteSetting->forOrder}}</a><span
                                                class="reveal-block text-base link-xs">{{$siteSetting->openingHours}}</span>
                                        </address>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="list-inline list-inline-sm">
                                    <li><a href="#" class="link-silver-light"><span
                                                class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                                    <li><a href="#" class="link-silver-light"><span
                                                class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                                    <li><a href="#" class="link-silver-light"><span
                                                class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                                    <li><a href="#" class="link-silver-light"><span
                                                class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
