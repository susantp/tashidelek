<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $title = config('app.name');
    $info = [
        'logoFile' => 'logo.png',
        'title' => $title,
        'description' => 'Our Chefs offer you perfect cooking, best-served dishes with fresh ingredients and old recipes. We have only carefully'.'</br>'.'sourced and seasonal ingredients at our disposal to make rustic dishes. We provide you with daily Mo: Mo, Tandoori,'.'</br>'.'Vegetable Korma and many more.',
        'sliders' => [
            [
                'position' => 0,
                'id' => 'slider1',
                'subTitle' => 'Your Favourite',
                'title' => 'TASHI DELEK',
                'description' => 'Welcome to Tashi Delek, a place where you can order your favorite restaurant dishes, drinks, and desserts at affordable price. We are glad to offer you the best food in the area to everyone.'
            ],
            [
                'position' => 1,
                'id' => 'slider2',
                'subTitle' => 'Affordable Organic Food',
                'title' => 'HEALTHY BREAKFASTS',
                'description' => 'Looking for fresh and tasty breakfasts and lunches? At Tashi Delek, you can order any kind of morning snack from local restaurants at reasonable prices without any extra charges.'
            ]
        ],
        'pages' => [
            [
                'title' => 'Our Menu',
                'slug' => 'menu',
                'image' => 'https://via.placeholder.com/200.png'
            ],
            [
                'title' => 'Catering',
                'slug' => 'catering',
                'image' => 'https://via.placeholder.com/200.png'
            ],
            [
                'title' => 'Events',
                'slug' => 'events',
                'image' => 'https://via.placeholder.com/200.png'
            ]
        ]
    ];
    return response()->json([
        "data" => $info
    ]);
})->name('home');
