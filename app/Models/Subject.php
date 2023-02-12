<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'teacher_id',
        'year_level_id'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function YearLevel()
    {
        return $this->belongsToMany(YearLevel::class);
    }
}
