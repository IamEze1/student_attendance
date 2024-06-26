<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relationship to courses offered
    public function lectures()
    {
        return $this->belongsToMany(User::class, 'courses_offers');
    }

    //Relationship to attendances
    public function attendances(){
        return $this->hasMany(Attendance::class, "course_id");
    }
}
