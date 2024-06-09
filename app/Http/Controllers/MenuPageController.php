<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;

class MenuPageController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $categories = Category::all();

        if (request()->ajax()) {
            return view('partials.menu-list', compact('menus'))->render();
        }

        return view('menus', compact('menus', 'categories'));
    }

    public function filterByCategory(Category $category)
    {
        $menus = Menu::where('category_id', $category->id)->get();
        $categories = Category::all();

        if (request()->ajax()) {
            return view('partials.menu-list', compact('menus'))->render();
        }

        return view('menus', compact('menus', 'categories', 'category'));
    }
}