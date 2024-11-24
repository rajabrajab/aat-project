<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackagesPackagesFeature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'package_id',
        'feature_id',
    ];

    // Relationships

    // PackagesPackagesFeature belongs to a package
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    // PackagesPackagesFeature belongs to a package feature
    public function feature()
    {
        return $this->belongsTo(PackageFeature::class, 'feature_id');
    }
}
