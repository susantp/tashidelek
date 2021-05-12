@extends('layouts.layout')

@section('pageTitle', 'About Us')
@section('content')
    <section
        class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
        <div class="shell shell-fluid">
            <div class="range range-condensed">
                <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                    <p class="h3 text-white">About Us</p>
                    <ul class="breadcrumbs-custom offset-top-10">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section
        class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-205 section-with-angle bg-black-haze">
        <div class="shell">
            <div class="range range-xs-center range-md-right">
                <div class="cell-sm-10 cell-md-6">
                    <h4 class="font-default">A Few Words About Tashi Delek</h4>
                    <p>The work is always in a full swing in our kitchen! Everyone here is on fire when it comes to
                        cooking. The best cooks all over the world are gathered here together to create something really
                        special to impress you deeply. The latest in cooking fashion, best recipes and fresh goods, this
                        is the formula of our success.
                    </p>
                    <p>No less important than a good cook is a good waitress or waiter. As clear as crystal black and
                        white uniform, nice smile, pleasant manners and perfect walk. A friendly waiter or waitress will
                        treat you like Majesty. Well-trained staff knows exactly how to serve the best visitors and how
                        to impress them with a little show.</p>
                    {{--<div class="range range-xs-center offset-top-30 text-center">
                        <div class="cell-xs-6 cell-sm-4">
                            <!-- CountTo-->
                            <div data-from="0" data-to="20" class="counter text-primary">20</div>
                            <div class="counter-header">
                                <p>orders made</p>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-4">
                            <!-- CountTo-->
                            <div data-from="0" data-to="1300" class="counter text-primary">1300</div>
                            <div class="counter-header">
                                <p>pizzas delivered</p>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-4">
                            <!-- CountTo-->
                            <div data-from="0" data-to="564" class="counter text-primary">564</div>
                            <div class="counter-header">
                                <p>clients everyday</p>
                            </div>
                        </div>
                    </div>--}}
                    
                </div>
            </div>
        </div>
    </section>
@endsection
