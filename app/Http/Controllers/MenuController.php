<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $categories = Category::all();
        return view('menus', compact('menus', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'price' => 'required|string',
            'description' => 'required|string|max:75',
            'image_path' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        $menu = new Menu();
        $menu['image_path'] = $request->file('image_path')->store('menu-images');
        $menu->name = $request->input('name');
        $menu->description = $request->input('description');
        $menu->price = $request->input('price');
        $menu->category_id = $request->input('category_id');
        $menu->save();

        return redirect()->route('create-menu')->with('success', 'Menu item created successfully.');
    }

    public function show(Request $request)
    {
        $search = $request->input('search');
        $menus = Menu::with('category')->filter($search)->paginate(5);
        $categories = Category::all();

        return view('admin.create-menu', compact('menus', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $menu = Menu::find($id);
        
        $request->validate([
            'name' => 'required|string|max:20',
            'price' => 'required|string',
            'description' => 'required|max:75',
            'category_id' => 'required|exists:categories,id',
            'image_path' => 'image'
        ]);
    
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ];
    
        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('menu-images');
    
            if ($menu->image_path) {
                Storage::delete($menu->image_path);
            }
        } else {
            $data['image_path'] = $menu->image_path;
        }
    
        Menu::where('id',$id)->update($data);
    
        return redirect()->route('create-menu')->with('success', 'Menu Updated');
    }
    

    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image_path);
        $menu->delete();
        return redirect()->route('create-menu')->with('success','Menu Deleted');
    }
}
