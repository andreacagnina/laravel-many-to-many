<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\support\Str;
use App\Models\Project;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug'
    ];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
