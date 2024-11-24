<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'invitees_count',
        'accept_coupon',
        'status',
        'description',
        'recommended',
    ];

    // Relationships

    // Package belongs to a single category
    public function category()
    {
        return $this->belongsTo(PackageCategory::class, 'category_id');
    }

    // Package has many invitations
    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'package_id');
    }

    // Package has many features through the packages_packages_features pivot table
    public function features()
    {
        return $this->hasMany(PackagesPackagesFeature::class, 'package_id');
    }

    // Package belongs to many templates through the packages_templates pivot table
    public function templates()
    {
        return $this->belongsToMany(Template::class, 'packages_templates', 'package_id', 'template_id');
    }
}
