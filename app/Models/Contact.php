<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'last_name',
        'first_name',
        'position',
        'birthdate',
        'gender',
        'phone_number',
        'whatsapp_number',
        'email',
        'created_from',
    ];

    // Relationships

    // Contact has many invitation contacts
    public function invitationContacts()
    {
        return $this->hasMany(InvitationContact::class, 'contact_id');
    }
}
