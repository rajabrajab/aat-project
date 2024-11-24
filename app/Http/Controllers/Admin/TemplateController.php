<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TemplateRequest;
use App\Models\PackageCategory;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return view('dashboard.templates.index', compact('templates'));
    }

    public function create()
    {
        $categories = PackageCategory::all();
        return view('dashboard.templates.create', compact('categories'));

    }

    public function store(TemplateRequest $request)
    {
        Template::create($request->validated()); // Use validated data
        return redirect()->route('templates.index')->with('success', 'تم إنشاء القالب بنجاح');
    }

    public function edit(Template $template)
    {
        $categories = PackageCategory::all(); // Fetch categories for the dropdown
        return view('dashboard.templates.edit', compact('template', 'categories'));
    }

   public function update(TemplateRequest $request, Template $template)
    {
        $template->update($request->validated()); // Use validated data
        return redirect()->route('templates.index')->with('success', 'تم تعديل القالب بنجاح');
    }

    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->route('templates.index')->with('success', 'تم حذف القالب بنجاح');
    }
}
