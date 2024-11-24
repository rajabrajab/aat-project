<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   protected $fillable = [
        'source_platform',
        'email',
        'password',
        'avatar',
        'full_name',
        'status',
        'role',
        'permissions',
        'activated_at',
        'username',
        'country',
        'address',
        'gender',
        'city',
        'last_login',
        'deleted_by',
        'utm',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


     // Relationships

    // User has many invitations
    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'user_id');
    }

    // User has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }

    // User has many payments
    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id');
    }
}
