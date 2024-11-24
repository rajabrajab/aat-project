<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use App\Models\PackageCategory;
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
        $categories = PackageCategory::all();

        return view('dashboard.packages.create', compact('categories'));
    }

    public function store(PackageRequest $request)
    {
        Package::create($request->validated()); // Use validated data
        return redirect()->route('packages.index')->with('success', 'تم إنشاء الباقة بنجاح');
    }

    public function edit(Package $package)
    {
        $categories = PackageCategory::all(); // Fetch categories for the dropdown
        return view('dashboard.packages.edit', compact('categories' ,'package'));
    }

    public function update(PackageRequest $request, Package $package)
    {
        $package->update($request->validated()); // Use validated data
        return redirect()->route('packages.index')->with('success', 'تم تعديل الباقة بنجاح');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'تم حذف الباقة بنجاح');
    }
}
