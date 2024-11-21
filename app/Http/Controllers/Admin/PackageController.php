<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('dashboard.packages.index', compact('packages'));
    }

    public function create()
    {
        // $categories = Category::all();
        return view('dashboard.packages.create');
        // return view('dashboard.packages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'invitees_count' => 'required|integer|min:1',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string|max:500',
            'recommended' => 'required|boolean',
            'accept_coupon' => 'required|boolean',
        ]);

        Package::create($request->all());
        return redirect()->route('packages.index')->with('success', 'تم إنشاء الباقة بنجاح');
    }

    public function edit(Package $package)
    {
        $categories = Category::all(); // Fetch categories for the dropdown
        return view('dashboard.packages.edit', compact('package', 'categories'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'invitees_count' => 'required|integer|min:1',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string|max:500',
            'recommended' => 'required|boolean',
            'accept_coupon' => 'required|boolean',
        ]);

        $package->update($request->all());
        return redirect()->route('packages.index')->with('success', 'تم تعديل الباقة بنجاح');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'تم حذف الباقة بنجاح');
    }
}
