<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'package_id',
        'template_id',
        'invitation_name',
        'date_type',
        'invitation_date',
        'invitation_time',
        'invitation_image',
        'invitation_video',
        'invitation_file',
        'map_latitude',
        'map_longitude',
        'city',
        'hood',
        'detailed_address',
        'message_instructions_to_invitees',
        'payment_method',
        'payment_status',
        'payment_response',
        'payment_transaction_id',
        'payment_amount',
        'invitees_count',
        'present_count',
        'absent_count',
        'deleted_by',
        'package_json',
        'created_from',
        'invitation_status',
        'qr_code',
    ];

    // Relationships

    // Invitation belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Invitation belongs to a package
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    // Invitation belongs to a category
    public function category()
    {
        return $this->belongsTo(InvitationCategory::class, 'category_id');
    }

    // Invitation belongs to a template
    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }

    // Invitation has many invitation contacts
    public function contacts()
    {
        return $this->hasMany(InvitationContact::class, 'invitation_id');
    }

    // Invitation has many payments
    public function payments()
    {
        return $this->hasMany(Payment::class, 'invitation_id');
    }

    // Invitation has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'invitation_id');
    }
}
