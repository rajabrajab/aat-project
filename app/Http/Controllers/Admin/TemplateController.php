<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        // $categories = Category::all();
        // return view('dashboard.templates.create', compact('categories'));

         return view('dashboard.templates.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:active,inactive',
        ]);

        Template::create($request->all());
        return redirect()->route('templates.index')->with('success', 'تم إنشاء القالب بنجاح');
    }

    public function edit(Template $template)
    {
        $categories = Category::all(); // Fetch categories for the dropdown
        return view('dashboard.templates.edit', compact('template', 'categories'));
    }

    public function update(Request $request, Template $template)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:active,inactive',
        ]);

        $template->update($request->all());
        return redirect()->route('templates.index')->with('success', 'تم تعديل القالب بنجاح');
    }

    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->route('templates.index')->with('success', 'تم حذف القالب بنجاح');
    }
}
