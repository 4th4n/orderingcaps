<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the form to add a new menu item
    public function create()
    {
        return view('admin.create');
    }

    // Store a new menu item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new menu item
        MenuItem::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.create')->with('success', 'Menu item added successfully.');
    }

    // Show all menu items
    public function index()
    {
        $items = MenuItem::all();
        return view('admin.index', compact('items'));
    }
}

