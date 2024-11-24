<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'invitation_id',
        'method',
        'provider_response',
        'transaction_id',
        'amount',
        'currency',
        'deleted_by',
        'reason',
        'status',
    ];

    // Relationships

    // Payment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Payment belongs to an invitation
    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'invitation_id');
    }
}
