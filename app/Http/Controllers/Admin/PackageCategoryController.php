<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageCategory;
use Illuminate\Http\Request;

class PackageCategoryController extends Controller
{
    public function index()
    {
        $package_categories = PackageCategory::all();
        return view('dashboard.package_categories.index', compact('package_categories'));
    }

    public function create()
    {
        return view('dashboard.package_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        PackageCategory::create($request->all());
        return redirect()->route('package_categories.index')->with('success', 'تم إنشاء الفئة بنجاح');
    }

    public function edit(PackageCategory $packageCategory)
    {
        return view('dashboard.package_categories.edit', compact('packageCategory'));
    }

    public function update(Request $request, PackageCategory $packageCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $packageCategory->update($request->all());
        return redirect()->route('package_categories.index')->with('success', 'تم تعديل الفئة بنجاح');
    }

    public function destroy(PackageCategory $packageCategory)
    {
        $packageCategory->delete();
        return redirect()->route('package_categories.index')->with('success', 'تم حذف الفئة بنجاح');
    }
}
