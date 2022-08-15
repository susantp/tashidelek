<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $title = config('app.name');
    $info = [
        'title' => $title,
        'description' => 'Our Chefs offer you perfect cooking, best-served dishes with fresh ingredients and old recipes. We have only carefully'.'</br>'.'sourced and seasonal ingredients at our disposal to make rustic dishes. We provide you with daily Mo: Mo, Tandoori,'.'</br>'.'Vegetable Korma and many more.',
        'sliders' => [
            [
                'subTitle' => '',
                'title' => '',
                'description' => ''
            ],
            [
                'subTitle' => '',
                'title' => '',
                'description' => ''
            ],
            [
                'subTitle' => '',
                'title' => '',
                'description' => ''
            ],
        ],
        'pages' => [
            [
                'title' => 'Our Menu',
                'slug' => 'menu',
                'image' => ''
            ],
            [
                'title' => 'Catering',
                'slug' => 'catering',
                'image' => ''
            ],
            [
                'title' => 'Events',
                'slug' => 'events',
                'image' => ''
            ]
        ]
    ];
    return response()->json([
        "data" => $info
    ]);
})->name('home');
