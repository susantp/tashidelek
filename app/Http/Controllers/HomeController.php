<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(): View
    {
        if (request()->has('fbclid')) {
            $fbclid = request()->get('fbclid');
            Log::info("facebook clid " . $fbclid);
        }
        return view('home');
    }

    public function about()
    {
        return \view('about');
    }

    /**
     * @param Request $request
     * @param null $slug
     * @return Factory|View|RedirectResponse|Redirector
     */
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
        return "coming soon!";
    }
}
