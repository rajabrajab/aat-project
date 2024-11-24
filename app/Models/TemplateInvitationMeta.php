<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateInvitationMeta extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_id',
        'key',
        'value',
    ];

    // Relationships

    // TemplateInvitationMeta belongs to an invitation
    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }
}
