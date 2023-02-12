<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name'
    ];

    public function yearLevels()
    {
        return $this->BelongsToMany(YearLevel::class);
    }
}
