<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Display a list of categories
    public function index()
    {
        $categories = Category::all(); // Fetch all categories from the database
        return view('admin.categories.index', compact('categories')); // Return the view with the categories
    }

    // Show the form for creating a new category
    public function create()
    {
        return view('admin.categories.create'); // Return the view for adding a new category
    }

    // Store a newly created category in the database
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new category
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category added successfully.');
    }

    // Show the form for editing an existing category
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Find the category by ID
        return view('admin.categories.edit', compact('category')); // Return the edit view with the category data
    }

    // Update the specified category in the database
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Find the category and update its name
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    // Delete the specified category from the database
    public function destroy($id)
    {
        $category = Category::findOrFail($id); // Find the category by ID
        $category->delete(); // Delete the category

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
