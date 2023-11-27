<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title_fr','description_fr','image','video','link','title_en','description_en',
    ];

    public function images()
    {
        return $this->hasMany(Images::class);
    }
}
