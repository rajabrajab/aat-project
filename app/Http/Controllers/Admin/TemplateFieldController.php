<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        // $templates = Template::all();
        // return view('dashboard.template_fields.create', compact('templates'));

         return view('dashboard.template_fields.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'template_id' => 'required|exists:templates,id',
            'field_type' => 'required|in:text,textarea,select,checkbox,radio,date',
            'label' => 'required|string|max:255',
        ]);

        TemplateField::create($request->all());
        return redirect()->route('template_fields.index')->with('success', 'تم إنشاء الحقل بنجاح');
    }

    public function edit(TemplateField $templateField)
    {
        $templates = Template::all(); // Fetch templates for the dropdown
        return view('dashboard.template_fields.edit', compact('templateField', 'templates'));
    }

    public function update(Request $request, TemplateField $templateField)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'template_id' => 'required|exists:templates,id',
            'field_type' => 'required|in:text,textarea,select,checkbox,radio,date',
            'label' => 'required|string|max:255',
        ]);

        $templateField->update($request->all());
        return redirect()->route('template_fields.index')->with('success', 'تم تعديل الحقل بنجاح');
    }

    public function destroy(TemplateField $templateField)
    {
        $templateField->delete();
        return redirect()->route('template_fields.index')->with('success', 'تم حذف الحقل بنجاح');
    }
}
