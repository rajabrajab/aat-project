<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvitationRequest;
use App\Models\Invitation;
use App\Models\InvitationCategory;
use App\Models\Package;
use App\Models\PackageCategory;
use App\Models\Template;
use App\Models\User;
use App\Services\FileHelper;
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
        $users = User::all();
        $packages = Package::all();
        $categories = InvitationCategory::all();
        $templates = Template::all();

        return view('dashboard.invitations.create', compact('users', 'packages' ,'categories' , 'templates'));
    }
    public function store(InvitationRequest $request)
    {
        $imageName = $request->hasFile('invitation_image')
            ? FileHelper::uploadFile($request->file('invitation_image'), 'invitations/images')
            : null;

        $videoName = $request->hasFile('invitation_video')
            ? FileHelper::uploadFile($request->file('invitation_video'), 'invitations/videos')
            : null;

        Invitation::create(array_merge(
            $request->validated(), // Use validated data
            [
                'invitation_image' => $imageName,
                'invitation_video' => $videoName,
            ]
        ));

        return redirect()->route('invitations.index')->with('success', 'تم إنشاء الدعوة بنجاح');
    }

    public function edit(Invitation $invitation)
    {
        $users = User::all();
        $packages = Package::all();
        $categories = InvitationCategory::all();
        $templates = Template::all();

        return view('dashboard.invitations.edit', compact('invitation', 'users', 'packages' ,'categories' , 'templates'));
    }

    public function update(InvitationRequest $request, Invitation $invitation)
    {
        $imageName = $request->hasFile('invitation_image')
            ? FileHelper::uploadFile($request->file('invitation_image'), 'invitations/images')
            : $invitation->invitation_image;

        $videoName = $request->hasFile('invitation_video')
            ? FileHelper::uploadFile($request->file('invitation_video'), 'invitations/videos')
            : $invitation->invitation_video;

        $invitation->update(array_merge(
            $request->validated(), // Use validated data
            [
                'invitation_image' => $imageName,
                'invitation_video' => $videoName,
            ]
        ));

        return redirect()->route('invitations.index')->with('success', 'تم تعديل الدعوة بنجاح');
    }

    public function destroy(Invitation $invitation)
    {
        $invitation->delete();
        return redirect()->route('invitations.index')->with('success', 'تم حذف الدعوة بنجاح');
    }
}
