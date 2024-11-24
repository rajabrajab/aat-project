<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvitationCategory;
use Illuminate\Http\Request;

class InvitationCategoryController extends Controller
{
    public function index()
    {
        $invitation_categories = InvitationCategory::all();
        return view('dashboard.invitation_categories.index', compact('invitation_categories'));
    }

    public function create()
    {
        return view('dashboard.invitation_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        InvitationCategory::create($request->all());
        return redirect()->route('invitation_categories.index')->with('success', 'تم إنشاء الفئة بنجاح');
    }

    public function edit(InvitationCategory $invitationCategory)
    {
        return view('dashboard.invitation_categories.edit', compact('invitationCategory'));
    }

    public function update(Request $request, InvitationCategory $invitationCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $invitationCategory->update($request->all());
        return redirect()->route('invitation_categories.index')->with('success', 'تم تعديل الفئة بنجاح');
    }

    public function destroy(InvitationCategory $invitationCategory)
    {
        $invitationCategory->delete();
        return redirect()->route('invitation_categories.index')->with('success', 'تم حذف الفئة بنجاح');
    }
}
