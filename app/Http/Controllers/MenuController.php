<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        $categories = Category::all();
        return view('menus', compact('menus', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
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

    public function show()
    {
        $menus = Menu::all();
        $categories = Category::all();
        return view('admin.create-menu', compact('menus', 'categories'));
    }


    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {
        $menu = Menu::find($id);
    
        if (!$menu) {
            return redirect()->route('create-menu')->with('error', 'Menu not found');
        }
        
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required|max:75',
            'category_id' => 'required|exists:categories,id',
            'image_path' => 'image'
        ]);
    
        // Prepare the data for updating the menu
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ];
    
        // Check if a new image is uploaded and handle the file upload
        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('menu-images');
    
            // Delete the old image file
            if ($menu->image_path) {
                Storage::delete($menu->image_path);
            }
        } else {
            $data['image_path'] = $menu->image_path;
        }
    
        // Update the menu with the new data
        Menu::where('id',$id)->update($data);
    
        // Redirect with a success message
        return redirect()->route('create-menu')->with('success', 'Menu Updated');
    }
    

    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image_path);
        $menu->delete();
        return redirect()->route('create-menu')->with('success','Menu Deleted');
    }
}
