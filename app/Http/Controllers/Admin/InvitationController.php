<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        $invitations = Invitation::all();
        return view('dashboard.invitations.index', compact('invitations'));
    }

    public function create()
    {
        // $users = User::all();
        // $packages = Package::all();
        // Add other required data
        // return view('dashboard.invitations.create', compact('users', 'packages'));

        return view('dashboard.invitations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'user_id' => 'required|exists:users,id',
        'package_id' => 'required|exists:packages,id',
        'category_id' => 'required|exists:categories,id',
        'template_id' => 'required|exists:templates,id',
        'invitation_name' => 'required|string|max:255',
        'date_type' => 'required|in:gregorian,hijri',
        'invitation_date' => 'required|date',
        'invitation_time' => 'required',
        'invitation_image' => 'nullable|image|max:2048',
        'invitation_video' => 'nullable|mimes:mp4,avi|max:10240',
        'city' => 'required|string|max:255',
        'hood' => 'required|string|max:255',
        'detailed_address' => 'required|string|max:500',
        'payment_method' => 'required|in:credit_card,paypal',
        'payment_status' => 'required|in:pending,completed',
        'qr_code' => 'nullable|string|max:255',
        ]);

        Invitation::create($request->all());
        return redirect()->route('invitations.index')->with('success', 'تم إنشاء الدعوة بنجاح');
    }

    public function edit(Invitation $invitation)
    {
        $users = User::all();
        $packages = Package::all();
        // Add other required data
        return view('dashboard.invitations.edit', compact('invitation', 'users', 'packages'));
    }

    public function update(Request $request, Invitation $invitation)
    {
        $request->validate([
        'user_id' => 'required|exists:users,id',
        'package_id' => 'required|exists:packages,id',
        'category_id' => 'required|exists:categories,id',
        'template_id' => 'required|exists:templates,id',
        'invitation_name' => 'required|string|max:255',
        'date_type' => 'required|in:gregorian,hijri',
        'invitation_date' => 'required|date',
        'invitation_time' => 'required',
        'invitation_image' => 'nullable|image|max:2048',
        'invitation_video' => 'nullable|mimes:mp4,avi|max:10240',
        'city' => 'required|string|max:255',
        'hood' => 'required|string|max:255',
        'detailed_address' => 'required|string|max:500',
        'payment_method' => 'required|in:credit_card,paypal',
        'payment_status' => 'required|in:pending,completed',
        'qr_code' => 'nullable|string|max:255',
    ]);

        $invitation->update($request->all());
        return redirect()->route('invitations.index')->with('success', 'تم تعديل الدعوة بنجاح');
    }

    public function destroy(Invitation $invitation)
    {
        $invitation->delete();
        return redirect()->route('invitations.index')->with('success', 'تم حذف الدعوة بنجاح');
    }
}
