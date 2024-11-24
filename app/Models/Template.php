<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'status',
        'created_by',
    ];

    // Relationships

    // Template has many invitations
    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'template_id');
    }

    // Template has many template fields
    public function fields()
    {
        return $this->hasMany(TemplateField::class, 'template_id');
    }

    // Template has many template invitation meta
    public function meta()
    {
        return $this->hasMany(TemplateInvitationMeta::class, 'template_id');
    }

    // Template belongs to many packages through packages_templates
    public function packages()
    {
        return $this->belongsToMany(Package::class, 'packages_templates', 'template_id', 'package_id');
    }

    // Template belongs to many package categories (if applicable via another relationship)
    public function category()
    {
        return $this->belongsTo(PackageCategory::class, 'category_id');
    }
}
