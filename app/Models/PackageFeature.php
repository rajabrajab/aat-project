<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageFeature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    // Relationships

    // PackageFeature belongs to many packages through packages_packages_features
    public function packages()
    {
        return $this->belongsToMany(Package::class, 'packages_packages_features', 'feature_id', 'package_id');
    }
}
