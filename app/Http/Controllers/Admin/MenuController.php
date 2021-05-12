<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Exception\ImageException;
use Intervention\Image\Facades\Image;

class MenuController extends Controller
{
    public function index() : View
    {
        $menus = Menu::all();
        return view('admin.menu.index')->with('menus', $menus);
    }


    public function create(): View
    {
        return view('admin.menu.create-edit');
    }

    public function store(Request $request): Request
    {

    }


    public function show(Menu $menu): Menu
    {
        return $menu;
    }


    public function edit(Menu $menu): View
    {
        return view('admin.menu.create-edit')->with('menu', $menu);
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $validated = $request->validated();

        if ($request->has('image')) {
            $originalBgImage = $request->file('image');

            $bgImage = Image::make($originalBgImage);
            $thumbnailImage = Image::make($originalBgImage);

            $originalPath = public_path('storage/menuImages/');
            $thumbnailPath = public_path('storage/menuImages/thumbs/');

            $bgImage->resize('1150', '530')->save($originalPath . time() . $originalBgImage->getClientOriginalName());
            $thumbnailImage->resize('310', '260')->save($thumbnailPath . time() . $originalBgImage->getClientOriginalName());
        }

        $menuModel = Menu::find($menu->id);
        $menuModel->title = $validated['title'];
        $menuModel->description = $validated['description'];
        if ($request->has('image')) {
            $menuModel->thumbnail = time() . $originalBgImage->getClientOriginalName();
            $menuModel->bg_image = time() . $originalBgImage->getClientOriginalName();
        }
        $menuModel->save();
        return back()->with('message', "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        return $menu;
    }

    public function toggleStatus(Request $request)
    {
        $menu = Menu::find($request->menuID);
        $menu->status = !$menu->status;
        $menu->save();
        return response()->json($menu);
    }
}
