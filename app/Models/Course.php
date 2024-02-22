<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'certificate',
        'workload', 'cover', 'status',
        'price', 'category_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participateCourses()
    {
        return $this->hasMany(ParticipateCourse::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
