<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Invitation;

class StatisticsController extends Controller
{
    /**
     * Show the statistic information view for the logged-in user.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        try {
            $userId = Auth::id();

            // Fetch general statistics
            $generalStatistics = $this->getGeneralStatistics($userId);

            // Fetch invitations by category
            $individualInvitations = $this->getUserInvitations($userId, 'individual');
            $companyInvitations = $this->getUserInvitations($userId, 'company');

            return view('userboard.statistic', compact('generalStatistics', 'individualInvitations', 'companyInvitations'));
        } catch (\Exception $e) {
            Log::error("Error fetching statistics: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Failed to fetch statistics.');
        }
    }

    /**
     * Fetch general statistics for the logged-in user.
     *
     * @param int $userId
     * @return array
     */
    private function getGeneralStatistics(int $userId)
    {
        $totalInvitations = Invitation::where('user_id', $userId)->count();
        $acceptedInvitations = Invitation::where('user_id', $userId)->where('invitation_status', 'accepted')->count();
        $rejectedInvitations = Invitation::where('user_id', $userId)->where('invitation_status', 'rejected')->count();
        $closedInvitations = Invitation::where('user_id', $userId)->where('invitation_status', 'closed')->count();
        $qrScannedCount = Invitation::where('user_id', $userId)->sum('qr_code_scanned_count');

        return [
            'total' => $totalInvitations,
            'accepted' => $acceptedInvitations,
            'rejected' => $rejectedInvitations,
            'closed' => $closedInvitations,
            'qr_scanned' => $qrScannedCount,
        ];
    }

    /**
     * Fetch invitations by category (Individual or Company).
     *
     * @param int $userId
     * @param string $category
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getUserInvitations(int $userId, string $category)
    {
        return Invitation::where('user_id', $userId)
            ->where('category', $category)
            ->get();
    }
}
