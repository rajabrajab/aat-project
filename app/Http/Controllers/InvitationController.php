<?php

namespace App\Http\Controllers;

use App\Helpers\InvitationHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class InvitationController extends Controller
{
    /**
     * Send a free invitation using the InvitationHelper.
     */
    public function sendFreeInvitation(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'whatsapp_number' => 'required|string|max:20',
        ]);

        $result = InvitationHelper::sendIndividualInvitation(
            $request->guest_name,
            $request->gender,
            $request->whatsapp_number,
            $request->nickname ?? null,
            $request->only(['email', 'date', 'city'])
        );

        $message = $result ? 'Invitation sent successfully!' : 'Failed to send invitation.';

        return redirect()->back()->with('status', $message);
    }

    /**
     * Show the Individual invitations page.
     */
    public function IndividualInvitsIndex()
    {
        $userId = Auth::id();
        $invitations = InvitationHelper::getMyInvitations($userId, 1); // Category ID 1 for Individual

        return view('userboard.Invits.Individual', compact('invitations'));
    }

    /**
     * Show the Companies invitations page.
     */
    public function companiesInvitsIndex()
    {
        $userId = Auth::id();
        $invitations = InvitationHelper::getMyInvitations($userId, 2); // Category ID 2 for Companies

        return view('userboard.Invits.companies', compact('invitations'));
    }

    /**
     * Show invitation details by ID.
     */
    public function show($id)
    {
        $invitation = InvitationHelper::invitationById($id);

        return view('userboard.Invits.show', compact('invitation'));
    }

    /**
     * Show the page to book an invitation.
     */
    public function bookInvitationShow()
    {
        return view('Invits.book');
    }

    /**
     * Book an invitation using InvitationHelper.
     */
    public function bookInvitation(Request $request)
    {
        $request->validate([
            'invitation_name' => 'required|string|max:255',
            'invitation_date' => 'required|date',
            'map_latitude' => 'nullable|numeric',
            'map_longitude' => 'nullable|numeric',
        ]);

        $result = InvitationHelper::bookInvitation($request->all());

        return $result
            ? redirect('/Invits/bookSuccess')
            : redirect()->back()->with('error', 'Failed to book invitation.');
    }

    /**
     * Show the page to send an invitation.
     */
    public function sendInvitationShow()
    {
        return view('Invits.send');
    }

    /**
     * Send an individual invitation.
     */
    public function sendIndividualInvitation(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'whatsapp_number' => 'required|string|max:20',
        ]);

        $result = InvitationHelper::sendIndividualInvitation(
            $request->guest_name,
            $request->gender,
            $request->whatsapp_number,
            $request->nickname ?? null,
            $request->only(['email', 'date', 'city'])
        );

        $message = $result ? 'Invitation sent successfully!' : 'Failed to send invitation.';

        return redirect()->back()->with('status', $message);
    }

    /**
     * Send a group invitation using InvitationHelper.
     */
    public function sendGroubInvitation(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,csv|max:5120',
        ]);

        $filePath = $request->file('excel_file')->store('temp');
        $result = InvitationHelper::sendGroupInvitations($filePath);

        return $result
            ? redirect('/Invits/sendSuccess')
            : redirect()->back()->with('error', 'Failed to send group invitations.');
    }

    /**
     * Accept an invitation.
     */
    public function acceptInvitation($id)
    {
        try {
            $userId = Auth::id();
            // Logic to mark invitation as accepted

            return redirect()->back()->with('status', 'Invitation accepted successfully.');
        } catch (\Exception $e) {
            Log::error("Error accepting invitation: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to accept invitation.');
        }
    }

    /**
     * Reject an invitation.
     */
    public function rejectInvitation($id)
    {
        try {
            $userId = Auth::id();
            // Logic to mark invitation as rejected

            return redirect()->back()->with('status', 'Invitation rejected successfully.');
        } catch (\Exception $e) {
            Log::error("Error rejecting invitation: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to reject invitation.');
        }
    }

    /**
     * Show invitation statistics by ID.
     */
    public function InvitationStatistic($id)
    {
        $statistics = InvitationHelper::invitationStatistic($id);

        return view('userboard.Invits.statistic', compact('statistics'));
    }

    /**
     * Export invitation data to Excel.
     */
    public function exportInvitation($id)
    {
        $fileUrl = InvitationHelper::exportInvitation($id);

        return $fileUrl
            ? response()->download($fileUrl)
            : redirect()->back()->with('error', 'Failed to export invitation data.');
    }
}
