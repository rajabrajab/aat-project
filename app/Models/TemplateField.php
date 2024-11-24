<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateField extends Model
{
    use HasFactory, SoftDeletes;

    protected $table  = "templates_fields";

    protected $fillable = [
        'name',
        'template_id',
        'field_type',
        'label',
    ];

    // Relationships

    // TemplateField belongs to a template
    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }
}
