<?php

namespace App\Helpers;

use App\Models\Invitation;
use App\Models\InvitationContact;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class InvitationHelper
{
    /**
     * Send individual invitations.
     *
     * @param string $guestName
     * @param string $gender
     * @param string $whatsappNumber
     * @param string|null $nickname
     * @param array|null $optionalParams ['email', 'date', 'city']
     * @return bool
     */
    public static function sendIndividualInvitation(string $guestName, string $gender, string $whatsappNumber, ?string $nickname = null, ?array $optionalParams = [])
    {
        try {
            // Validate gender
            if (!in_array($gender, ['male', 'female'])) {
                return false;
            }

            // Process sending invitation logic here...
            // Example: Send notification to WhatsApp or email.

            // Log success
            Log::info("Invitation sent to {$guestName} (WhatsApp: {$whatsappNumber})");

            return true;
        } catch (\Exception $e) {
            Log::error("Error sending invitation: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Send group invitations using Excel file.
     *
     * @param string $excelFilePath
     * @return bool
     */
    public static function sendGroupInvitations(string $excelFilePath)
    {
        try {
            $data = Excel::toArray([], $excelFilePath)[0];

            foreach ($data as $row) {
                self::sendIndividualInvitation(
                    $row['guestName'],
                    $row['gender'],
                    $row['whatsappNumber'],
                    $row['nickname'] ?? null,
                    [
                        'email' => $row['email'] ?? null,
                        'date' => $row['date'] ?? null,
                        'city' => $row['city'] ?? null,
                    ]
                );
            }

            return true;
        } catch (\Exception $e) {
            Log::error("Error sending group invitations: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Get all invitations for the user.
     *
     * @param int $userId
     * @param int|null $categoryId
     * @return array
     */
    public static function getMyInvitations(int $userId, ?int $categoryId = null)
    {
        try {
            $query = Invitation::where('user_id', $userId);

            if (!is_null($categoryId)) {
                $query->where('category_id', $categoryId);
            }

            $invitations = $query->get();
            $individualInvitations = $invitations->where('category_id', 1); // Example: Individual category
            $companyInvitations = $invitations->where('category_id', 2); // Example: Company category

            return [
                'individualInvitations' => $individualInvitations,
                'companyInvitations' => $companyInvitations,
            ];
        } catch (\Exception $e) {
            Log::error("Error fetching user invitations: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Get invitations sent to other users.
     *
     * @param int $userId
     * @param int|null $categoryId
     * @return array
     */
    public static function getOthersInvitations(int $userId, ?int $categoryId = null)
    {
        try {
            // Fetch all invitations by the user.
            $query = InvitationContact::where('invited_by', $userId);

            if (!is_null($categoryId)) {
                $query->whereHas('invitation', function ($q) use ($categoryId) {
                    $q->where('category_id', $categoryId);
                });
            }

            $contacts = $query->with('invitation')->get();
            return $contacts;
        } catch (\Exception $e) {
            Log::error("Error fetching others' invitations: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Get invitation by ID.
     *
     * @param int $invitationId
     * @return Invitation|null
     */
    public static function invitationById(int $invitationId)
    {
        return Invitation::with(['user', 'contacts'])->find($invitationId);
    }

    /**
     * Get invitation statistics.
     *
     * @param int $invitationId
     * @return array
     */
    public static function invitationStatistic(int $invitationId)
    {
        try {
            $invitation = Invitation::findOrFail($invitationId);

            $contacts = InvitationContact::where('invitation_id', $invitationId)->get();

            $statistics = [
                'notResponded' => $contacts->whereNull('invitation_received'),
                'accepted' => $contacts->whereNotNull('invitation_accepted'),
                'present' => $contacts->whereNotNull('is_present_on_event'),
                'apologists' => $contacts->whereNotNull('invitation_rejected'),
                'visitorsRateByGender' => [
                    'male' => $contacts->where('gender', 'male')->count(),
                    'female' => $contacts->where('gender', 'female')->count(),
                ],
                'visitorsRateByAge' => $contacts->groupBy('age'),
                'mostFamiliesVisitors' => [], // Example: logic here.
                'reviews' => $invitation->reviews,
            ];

            return $statistics;
        } catch (\Exception $e) {
            Log::error("Error fetching invitation statistics: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Book an invitation.
     *
     * @param array $invitationData
     * @return Invitation|bool
     */
    public static function bookInvitation(array $invitationData)
    {
        try {
            $invitation = Invitation::create($invitationData);
            return $invitation;
        } catch (\Exception $e) {
            Log::error("Error booking invitation: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Export invitation statistics.
     *
     * @param int $invitationId
     * @return string|bool
     */
    public static function exportInvitation(int $invitationId)
    {
        try {
            $statistics = self::invitationStatistic($invitationId);

            $fileName = "invitation_{$invitationId}_statistics.xlsx";

            Excel::store($statistics, $fileName);

            return Storage::url($fileName);
        } catch (\Exception $e) {
            Log::error("Error exporting invitation: " . $e->getMessage());
            return false;
        }
    }
}
