<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experiences extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title_fr', 'lieu','description_fr','title_en','description_en', 'datedebut', 'datefin'];
}
