<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    function student()
    {
        return $this->hasMany(Student::class);
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'section_year_level', 'year_level_id', 'section_id');
    }
}
