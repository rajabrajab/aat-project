<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackagesTemplate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'package_id',
        'template_id',
    ];

    // Relationships

    // PackagesTemplate belongs to a package
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    // PackagesTemplate belongs to a template
    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }
}
