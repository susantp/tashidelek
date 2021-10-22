@extends('layouts.layout')

@section('pageTitle', 'About Us')
@section('content')
    <section
        class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image"
        style="background-color:#433E3D">
        <div class="shell shell-fluid">
            <div class="range range-condensed">
                <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                    <p class="h3 text-white">Request Reservation</p>
                    <ul class="breadcrumbs-custom offset-top-10">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Request Reservation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-50 section-sm-100"  id="reservationApp">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-xs-10">
                    <div class="inset-lg-left-15 inset-lg-right-15"></div>
                    <div class="menu-classic menu-classic-single" style="background-color: #433E3D">

                        <reservation-form></reservation-form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
