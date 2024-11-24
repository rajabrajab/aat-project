<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TemplateFieldRequest;
use App\Models\Template;
use App\Models\TemplateField;
use Illuminate\Http\Request;

class TemplateFieldController extends Controller
{
    public function index()
    {
        $templateFields = TemplateField::all();
        return view('dashboard.template_fields.index', compact('templateFields'));
    }

    public function create()
    {
        $templates = Template::all();
        return view('dashboard.template_fields.create', compact('templates'));

    }

   public function store(TemplateFieldRequest $request)
    {
        TemplateField::create($request->validated()); // Use validated data
        return redirect()->route('template_fields.index')->with('success', 'تم إنشاء الحقل بنجاح');
    }
    public function edit(TemplateField $templateField)
    {
        $templates = Template::all(); // Fetch templates for the dropdown
        return view('dashboard.template_fields.edit', compact('templateField', 'templates'));
    }

    public function update(TemplateFieldRequest $request, TemplateField $templateField)
    {
        $templateField->update($request->validated()); // Use validated data
        return redirect()->route('template_fields.index')->with('success', 'تم تعديل الحقل بنجاح');
    }

    public function destroy(TemplateField $templateField)
    {
        $templateField->delete();
        return redirect()->route('template_fields.index')->with('success', 'تم حذف الحقل بنجاح');
    }
}
