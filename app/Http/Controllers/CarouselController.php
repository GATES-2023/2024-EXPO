<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $firstSet = Carousel::orderBy('order', 'asc')->take(5)->get();
        $secondSet = Carousel::orderBy('order', 'asc')->skip(5)->take(5)->get();

        return view('mainView', compact('firstSet', 'secondSet'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image_path' => 'required|image',
            'image_alt' => 'required|string|max:30',
            'order' => 'required|integer',
        ], [
            'image_path.required' => 'The image field is required',
            'image_alt.required' => 'The name field is required',
            'image_alt.max' => 'The name field must not be greater than 30 characters.'
        ]);

        $imagePath = $request->file('image_path')->store('carousel-images');
        $carousel = new Carousel();
        $carousel->image_path = $imagePath;
        $carousel->image_alt = $request->input('image_alt'); 
        $carousel->order = $request->input('order');
        $carousel->save();

        return redirect()->route('create-carousel')->with('success', 'Carousel item created successfully.');
    }

    public function show()
    {
        $carousels = Carousel::orderBy('order', 'asc')->get();
        return view('admin.create-carousel', compact('carousels'));
    }

    public function update(Request $request, string $id)
    {
        $carousel = Carousel::findOrFail($id);

        $request->validate([
            'image_alt' => 'required|string|max:255',
            'order' => 'required|integer',
        ]);

        $carousel->image_alt = $request->input('image_alt'); 
        $carousel->order = $request->input('order');

        if ($request->hasFile('image_path')) {
            Storage::delete($carousel->image_path);

            $carousel->image_path = $request->file('image_path')->store('carousel-images');
        }

        $carousel->save();

        return redirect()->route('create-carousel')->with('success', 'Carousel item updated successfully.');
    }

    public function destroy(string $id)
    {
        $carousel = Carousel::findOrFail($id);
        Storage::delete($carousel->image_path);
        $carousel->delete();
        return redirect()->route('create-carousel')->with('success', 'Carousel item deleted successfully.');
    }
}
