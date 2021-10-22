@extends('layouts.layout')
@section('pageTitle', 'Menu List')
@section('content')
    <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image"
             style="background-color:#433E3D">
        <div class="shell shell-fluid">
            <div class="range range-condensed">
                <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                    <p class="h1 text-white">{{$menu->title}}</p>
                    <p class="h4 text-white">{{$menu->description ?? ''}}</p>
                    <ul class="breadcrumbs-custom offset-top-10">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url()->current()}}">Menu</a></li>
                        <li class="active">{{$menu->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-50 section-sm-100">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-xs-12">
                    <div class="inset-lg-left-15 inset-lg-right-15"></div>
                    <div class="menu-classic menu-classic-single" style="background-color: #433E3D">
                        {{--                        <h4 class="title"><a href="menu-single.html" class="link-white">sdfadsf</a></h4>--}}
                        <ul class="list-menu">
                            @foreach($menu->items as $item)
                                <li>
                                    <div class="menu-item h6">
                                        <p class="name">{{ucfirst($item->name)}}</p>
                                        <p class="price">{{$item->price}}</p>
                                    </div>
                                    <div class="menu-item-desc"><span>{{strtolower($item->description)}}</span></div>
                                    @if($item->price_offer)
                                        <div class="menu-item-offer">
                                            <span>{{sprintf('Offer - %s', $item->price_offer)}}</span>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{--            <div class="offset-top-50 offset-sm-top-100 text-center divider-custom">--}}
            {{--                <div><a href="#" class="btn btn-md btn-shape-circle btn-primary">download full menu</a></div>--}}
            {{--            </div>--}}
        </div>
    </section>
    <section class="bg-image-10 context-dark" style="opacity: 0.6; background-color: #000000">
        <div class="shell section-80 section-sm-130">
            <div class="range range-xs-center range-lg-bottom">
                <div class="cell-md-9">
                    <div class="group-sm">
                        <h3 class="text-baseline">{{config('app.name')}}</h3>
                        <div class="group-sm offset-top-15 offset-lg-top-0">
                            <hr class="hr divider-xs bg-primary text-top veil reveal-lg-inline-block">
                            <p class="big offset-lg-top-0 text-top text-white">Enjoy the food.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
