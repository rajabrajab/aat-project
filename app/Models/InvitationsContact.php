<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvitationContact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_id',
        'contact_id',
        'qrcode',
        'invitation_received',
        'invitation_failed',
        'invitation_accepted',
        'invitation_rejected',
        'is_present_on_event',
    ];

    // Relationships

    // InvitationContact belongs to an invitation
    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }

    // InvitationContact belongs to a contact
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
