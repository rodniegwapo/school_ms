<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'gender',
        'phone',
        'address',
        'year_level_id',
        'section_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function year_level()
    {
        return $this->belongsTo(YearLevel::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
