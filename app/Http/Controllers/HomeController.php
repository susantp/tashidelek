<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $fbclid = request()->get('fbclid');
        Log::info('fbclid ' . $fbclid);
        /*$fbres = Http::get(
                    "https://graph.facebook.com/v12.0/tashidelek.2013/feed", ['access_token' => config('social.facebook.token')]);
                $data = $fbres->collect();
                return $data;*/
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function menu(Request $request, $slug = null)
    {
        if ($slug == null) return redirect('/');
        $menu = Menu::with('items')->firstWhere('slug', $slug);
//        return $menu->items   ;
        if ($menu == null) return redirect('/');
        return \view('menu-single', compact('menu'));
    }

    public function gallery()
    {
        return "coming soon!";
    }

    public function contact()
    {
        return view('contact');
    }

    public function reservation()
    {
        return view('reservation');
    }
}
